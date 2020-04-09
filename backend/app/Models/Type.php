<?php

namespace App\Models;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $withCount = [
        'entities'
    ];

    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
