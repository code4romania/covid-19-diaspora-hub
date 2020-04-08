<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchEntitiesRequest;
use App\Http\Resources\v1\EntityCollection;
use App\Http\Resources\v1\EntityResource;
use App\Models\Entity;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @group Entities
 */
class EntityController extends Controller
{
    /**
     * Get all entities
     */
    public function index(): EntityCollection
    {
        return new EntityCollection(Entity::all());
    }

    /**
     * Get all entities without a location
     */
    public function withoutLocation(): EntityCollection
    {
        return new EntityCollection(Entity::withoutLocation()->get());
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

    /**
     * Search for entities
     *
     * @queryParam categories[] required List of category ids to return. Example: 8
     * @queryParam lat required Latitude. Example: 85.766782
     * @queryParam lng required Longitude. Example: -94.2354
     * @queryParam country required ISO 3166-1 alpha-2 country code. Example: BW
     * @queryParam radius Show results only this many km away from the query coordinates. Defaults to 100. Example: 100
     */
    public function search(SearchEntitiesRequest $request): AnonymousResourceCollection
    {
        extract($request->validated());

        return EntityResource::collection(
            Entity::where('country', $country)
                ->whereHas('categories', function ($query) use ($categories) {
                    $query->whereIn('categories.id', $categories);
                })
                ->geofence($lat, $lng, 0, $radius)
                ->orderBy('distance', 'ASC')
                ->get()
        );
    }
}
