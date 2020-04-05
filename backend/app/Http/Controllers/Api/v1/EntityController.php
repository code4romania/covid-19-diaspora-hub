<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\EntityCollection;
use App\Http\Resources\v1\EntityResource;
use App\Models\Entity;

/**
 * @group Entities
 */
class EntityController extends Controller
{
    /**
     * Get all entities
     *
     * @queryParam page int The page number. Example: 1
     */
    public function index(): EntityCollection
    {
        return new EntityCollection(Entity::paginate($this->perPage()));
    }

    /**
     * Get a single entity
     *
     * @urlParam entity required The ID of the entity. Example: 2
     */
    public function show(Entity $entity): EntityResource
    {
        return new EntityResource($entity);
    }
}
