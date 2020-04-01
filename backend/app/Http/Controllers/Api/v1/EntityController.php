<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\EntityCollection;
use App\Http\Resources\v1\EntityResource;
use App\Models\Entity;

class EntityController extends Controller
{
    public function index(): EntityCollection
    {
        return new EntityCollection(Entity::paginate());
    }

    public function show(Entity $entity): EntityResource
    {
        return new EntityResource($entity);
    }
}
