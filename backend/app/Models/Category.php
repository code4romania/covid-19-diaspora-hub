<?php

namespace App\Models;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $casts = [
        'builtin' => 'boolean',
    ];

    public function entities()
    {
        return $this->belongsToMany(Entity::class);
    }
}
