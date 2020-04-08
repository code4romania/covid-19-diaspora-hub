<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Malhal\Geographical\Geographical;

class Entity extends Model
{
    use Geographical;

    protected static $kilometers = true;

    protected $with = [
        'type',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getCountryNameAttribute()
    {
        return __("countries.{$this->country}");
    }

    public function getAddressAttribute()
    {
        $lines = [
            [$this->address_line_1],
            [$this->address_line_2],
            [$this->postal_code, $this->city],
            [$this->county, $this->country_name],
        ];

        return collect($lines)
            ->map(fn ($line) => implode(', ', array_filter($line)))
            ->filter()
            ->toArray();
    }

    public function getLatLngAttribute(): ?string
    {
        if (is_null($this->latitude) || is_null($this->longitude)) {
            return null;
        }

        return $this->latitude . ',' . $this->longitude;
    }

    public function scopeWithoutLocation(Builder $query): Builder
    {
        return $query->whereNull('latitude')->orWhereNull('longitude');
    }
}
