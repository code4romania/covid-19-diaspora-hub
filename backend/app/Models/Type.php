<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $withCount = [
        'entities',
    ];

    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
