<?php

namespace App\Models;

use App\Models\Entity;

class Type extends BaseModel
{
    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
