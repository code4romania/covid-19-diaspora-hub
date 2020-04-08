<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\TypeCollection;
use App\Http\Resources\v1\TypeResource;
use App\Models\Type;

/**
 * @group Entity Types
 */
class TypeController extends Controller
{
    /**
     * Get all entity types
     */
    public function index(): TypeCollection
    {
        return new TypeCollection(Type::all());
    }

    /**
     * Get a single entity type
     * Retrieves a collection of entities that belong to the current type
     *
     * @urlParam type required The ID of the entity type. Example: 3
     */
    public function show(Type $type): TypeResource
    {
        return new TypeResource($type);
    }
}
