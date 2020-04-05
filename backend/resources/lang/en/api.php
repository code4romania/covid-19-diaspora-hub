<?php

return [

    'response' => [

        'endpointNotFound' => 'Endpoint not found.',
        'geocodingFailed'  => 'Could not find the specified location. Please try again with a different address.',

    ],

    'validate' => [
        'radius' => [
            'min' => 'The radius must be at least :min km.',
            'max' => 'The radius may not be greater than :max km.'
        ],
    ],

];
