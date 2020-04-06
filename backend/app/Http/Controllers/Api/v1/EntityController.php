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
     *
     * @queryParam page The page number. Example: 1
     */
    public function index(): EntityCollection
    {
        return new EntityCollection(Entity::paginate());
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
     * @queryParam lat required Latitude. Example: 41.3829
     * @queryParam lng required Longitude. Example: 2.17743
     * @queryParam radius Show results only this many km away from the query coordinates. Defaults to 100. Example: 50
     * @queryParam country ISO 3166-1 alpha-2 country code. No-example
     */
    public function search(SearchEntitiesRequest $request): AnonymousResourceCollection
    {
        extract($request->validated());

        return EntityResource::collection(
            Entity::when($country, fn ($q, $country) => $q->where('country', $country))
                ->geofence($lat, $lng, 0, $radius)
                ->orderBy('distance', 'ASC')
                ->get()
        );
    }
}
