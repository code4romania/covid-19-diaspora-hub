<?php

namespace App\Models;

use App\Models\Entity;

class Category extends BaseModel
{
    public function entities()
    {
        return $this->belongsToMany(Entity::class);
    }
}
