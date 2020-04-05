<?php

namespace App\Helpers;

use Algolia\AlgoliaSearch\PlacesClient;

class Places
{
    public static function geocode(string $query): ?array
    {
        $places = PlacesClient::create(
            config('places.algolia.id'),
            config('places.algolia.secret')
        );

        $result = $places->search($query);

        if (!$result['nbHits']) {
            return null;
        }

        return $result['hits'][0]['_geoloc'];
    }
}
