<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\Places;
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
     * @queryParam query required Street address, city or other geocodable string. Example: Barcelona
     * @queryParam radius Show results only this many km away from the query coordinates. Defaults to 100. Example: 50
     * @queryParam country ISO 3166-1 alpha-2 country code. No-example
     */
    public function search(SearchEntitiesRequest $request): AnonymousResourceCollection
    {
        extract($request->validated());

        $place = Places::geocode($query);

        abort_if(is_null($place), 404, __('api.response.geocodingFailed'));

        return EntityResource::collection(
            Entity::when($country, fn ($q, $country) => $q->where('country', $country))
                ->geofence($place['lat'], $place['lng'], 0, $radius)
                ->orderBy('distance', 'ASC')
                ->get()
        );
    }
}
