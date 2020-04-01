<?php

namespace App\Models;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function entities()
    {
        return $this->belongsToMany(Entity::class);
    }
}
