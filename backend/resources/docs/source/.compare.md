---
title: API Reference

language_tabs:
- javascript
- php
- python
- bash

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Categories


<!-- START_80420c095ed96da032c9eb419d7d6e2d -->
## Get all categories

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/categories"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get('http://localhost/api/v1/categories');
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/categories'
response = requests.request('GET', url)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/categories" 
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Eum cupiditate est doloremque placeat nesciunt sit.",
            "builtin": false
        },
        {
            "id": 2,
            "name": "Qui qui pariatur labore dolore.",
            "builtin": false
        },
        {
            "id": 3,
            "name": "Ullam earum impedit dolores nostrum molestiae laborum praesentium facilis.",
            "builtin": false
        },
        {
            "id": 4,
            "name": "Aut in qui repellendus tenetur.",
            "builtin": false
        },
        {
            "id": 5,
            "name": "Eum minus aut sapiente dolorem tenetur.",
            "builtin": false
        },
        {
            "id": 6,
            "name": "Enim autem ipsam rem dolorem a.",
            "builtin": false
        },
        {
            "id": 7,
            "name": "Minus in et ad saepe.",
            "builtin": false
        },
        {
            "id": 8,
            "name": "Recusandae ratione qui aliquid ratione et quo nostrum.",
            "builtin": false
        },
        {
            "id": 9,
            "name": "Omnis beatae accusamus harum nihil aspernatur sed.",
            "builtin": false
        },
        {
            "id": 10,
            "name": "Odit alias porro aspernatur aut maiores perspiciatis.",
            "builtin": true
        }
    ]
}
```

### HTTP Request
`GET api/v1/categories`


<!-- END_80420c095ed96da032c9eb419d7d6e2d -->

#Entities


<!-- START_0bc6ff20cc4bbe3fa77e620bd3eebd49 -->
## Search for entities

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/entities/search"
);

let params = {
    "categories[]": "8",
    "lat": "85.766782",
    "lng": "-94.2354",
    "country": "BW",
    "radius": "100",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/entities/search',
    [
        'query' => [
            'categories[]'=> '8',
            'lat'=> '85.766782',
            'lng'=> '-94.2354',
            'country'=> 'BW',
            'radius'=> '100',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/entities/search'
params = {
  'categories[]': '8',
  'lat': '85.766782',
  'lng': '-94.2354',
  'country': 'BW',
  'radius': '100',
}
response = requests.request('GET', url, params=params)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/entities/search?categories[]=8&lat=85.766782&lng=-94.2354&country=BW&radius=100" 
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 252,
            "name": "Micu, Bejan and Simion",
            "description": "În sfârşit, ce-i veni lui Neghiniţă, gândul lumii. De mic ce sunt, pătrund în urechile.",
            "type": "Repellendus tempore impedit ea beatae repellat.",
            "categories": [
                {
                    "id": 8,
                    "name": "Recusandae ratione qui aliquid ratione et quo nostrum.",
                    "builtin": false
                },
                {
                    "id": 9,
                    "name": "Omnis beatae accusamus harum nihil aspernatur sed.",
                    "builtin": false
                }
            ],
            "address": [
                "Aleea Florilor 60",
                "206993, Fierbinți-Târg",
                "Olt, Botswana"
            ],
            "latlng": "85.766782,-99.968812",
            "distance": 47.04,
            "contact": {
                "email": "silvana38@example.com",
                "phone": "0731559679",
                "url": "https:\/\/www.pintilie.com\/accusantium-sit-aliquam-possimus-perferendis-aut-aut"
            }
        }
    ]
}
```

### HTTP Request
`GET api/v1/entities/search`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `categories[]` |  required  | List of category ids to return.
    `lat` |  required  | Latitude.
    `lng` |  required  | Longitude.
    `country` |  required  | ISO 3166-1 alpha-2 country code.
    `radius` |  optional  | Show results only this many km away from the query coordinates. Defaults to 100.

<!-- END_0bc6ff20cc4bbe3fa77e620bd3eebd49 -->

#Entity Types


<!-- START_c8c46f79ea22771862059c1f7bcb0e64 -->
## Get all entity types

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/types"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get('http://localhost/api/v1/types');
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/types'
response = requests.request('GET', url)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/types" 
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Cupiditate quia dolor consequatur et cum et delectus voluptatem."
        },
        {
            "id": 2,
            "name": "Repellendus tempore impedit ea beatae repellat."
        },
        {
            "id": 3,
            "name": "Quae laborum at quia quisquam itaque."
        }
    ]
}
```

### HTTP Request
`GET api/v1/types`


<!-- END_c8c46f79ea22771862059c1f7bcb0e64 -->


