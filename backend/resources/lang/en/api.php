<?php

declare(strict_types=1);

return [

    'response' => [

        'endpointNotFound' => 'Endpoint not found.',
        'geocodingFailed'  => 'Could not find the specified location. Please try again with a different address.',

    ],

    'validate' => [
        'categories' => 'The selected category is invalid.',
        'country' => 'The country code must be 2 characters long.',
        'radius' => [
            'min' => 'The radius must be at least :min km.',
            'max' => 'The radius may not be greater than :max km.',
        ],
    ],

];
