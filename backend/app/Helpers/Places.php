<?php

namespace App\Helpers;

use Algolia\AlgoliaSearch\PlacesClient;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class Places
{
    public static function geocode(string $query): ?array
    {
        $key = 'geocoded-' . hash('sha1', $query);
        $expiresAt = Carbon::now()->addHour();

        return Cache::remember($key, $expiresAt, function () use ($query) {
            $places = PlacesClient::create(
                config('places.algolia.id'),
                config('places.algolia.secret')
            );

            $result = $places->search($query);

            if (!$result['nbHits']) {
                return null;
            }

            return $result['hits'][0]['_geoloc'];
        });
    }
}
