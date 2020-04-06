<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Malhal\Geographical\Geographical;

class Entity extends Model
{
    use Geographical;

    protected static $kilometers = true;

    protected $with = [
        'type',
        'categories',
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
}
