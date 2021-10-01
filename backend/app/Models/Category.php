<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $casts = [
        'builtin' => 'boolean',
    ];

    protected $withCount = [
        'entities',
    ];

    public function entities()
    {
        return $this->belongsToMany(Entity::class);
    }
}
