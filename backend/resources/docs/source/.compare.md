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

<!-- START_2378770b4f57b93f810abda7c44614b8 -->
## Get a single category
Retrieves a collection of entities that belong to the current category

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/categories/5"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get('http://localhost/api/v1/categories/5');
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/categories/5'
response = requests.request('GET', url)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/categories/5" 
```


> Example response (200):

```json
{
    "data": {
        "id": 5,
        "name": "Eum minus aut sapiente dolorem tenetur.",
        "builtin": false,
        "entities": [
            {
                "id": 3,
                "name": "Bogdan, Nedelcu and Toth",
                "country": "SI"
            },
            {
                "id": 4,
                "name": "Stoian, Peter and Ichim",
                "country": "TK"
            },
            {
                "id": 5,
                "name": "Sima, Cosma and Marinescu",
                "country": "CF"
            },
            {
                "id": 8,
                "name": "Szekely and Sons",
                "country": "LU"
            },
            {
                "id": 10,
                "name": "Munteanu-Zaharia",
                "country": "IE"
            }
        ]
    }
}
```

### HTTP Request
`GET api/v1/categories/{category}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `category` |  required  | The ID of the category.

<!-- END_2378770b4f57b93f810abda7c44614b8 -->

#Entities


<!-- START_4288e7337688d08ee1ca084a9b8a3b76 -->
## Get all entities

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/entities"
);

let params = {
    "page": "1",
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
    'http://localhost/api/v1/entities',
    [
        'query' => [
            'page'=> '1',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/entities'
params = {
  'page': '1',
}
response = requests.request('GET', url, params=params)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/entities?page=1" 
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Sava-Tanase",
            "country": "KW"
        },
        {
            "id": 2,
            "name": "David, Moise and Grigoras",
            "country": "EG"
        },
        {
            "id": 3,
            "name": "Bogdan, Nedelcu and Toth",
            "country": "SI"
        },
        {
            "id": 4,
            "name": "Stoian, Peter and Ichim",
            "country": "TK"
        },
        {
            "id": 5,
            "name": "Sima, Cosma and Marinescu",
            "country": "CF"
        }
    ]
}
```

### HTTP Request
`GET api/v1/entities`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `page` |  optional  | The page number.

<!-- END_4288e7337688d08ee1ca084a9b8a3b76 -->

<!-- START_a1414f1a639a9d59798dede94d307873 -->
## Get a single entity

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/entities/2"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get('http://localhost/api/v1/entities/2');
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/entities/2'
response = requests.request('GET', url)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/entities/2" 
```


> Example response (200):

```json
{
    "data": {
        "id": 2,
        "name": "David, Moise and Grigoras",
        "description": "Ce bucurie pe unchiaşul ei. Şi unchiaşul, ba la pădure, ba la arie, fără bici, fără nimic. Unchiaşul, minunat, îl duse la arie. Cum ajunse, Neghiniţă sări pe-un cal şi începu să strige din toate puterile în urechea împărătesei şi-i aflase gândul: \"Că ce bine-ar fi să mai facă vreo drăcie. Îi intră în urechea.",
        "type": "Cupiditate quia dolor consequatur et cum et delectus voluptatem.",
        "categories": [
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
                "id": 6,
                "name": "Enim autem ipsam rem dolorem a.",
                "builtin": false
            },
            {
                "id": 10,
                "name": "Odit alias porro aspernatur aut maiores perspiciatis.",
                "builtin": true
            }
        ],
        "location": {
            "address_line_1": "P-ța Mihai Viteazul 2B",
            "address_line_2": null,
            "city": "Pantelimon",
            "county": "Suceava",
            "postal_code": "921336",
            "country": "EG",
            "latitude": -81.607544,
            "longitude": -80.054887
        },
        "contact": {
            "email": "vpetrea@example.net",
            "phone": "0774661130",
            "url": "http:\/\/www.munteanu.com\/maxime-modi-sunt-cum-molestiae"
        }
    }
}
```

### HTTP Request
`GET api/v1/entities/{entity}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `entity` |  required  | The ID of the entity.

<!-- END_a1414f1a639a9d59798dede94d307873 -->

<!-- START_0bc6ff20cc4bbe3fa77e620bd3eebd49 -->
## Search for entities

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/entities/search"
);

let params = {
    "lat": "85.766782",
    "lng": "-94.2354",
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
            'lat'=> '85.766782',
            'lng'=> '-94.2354',
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
  'lat': '85.766782',
  'lng': '-94.2354',
  'radius': '100',
}
response = requests.request('GET', url, params=params)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/entities/search?lat=85.766782&lng=-94.2354&radius=100" 
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
            "location": {
                "address_line_1": "Aleea Florilor 60",
                "address_line_2": null,
                "city": "Fierbinți-Târg",
                "county": "Olt",
                "postal_code": "206993",
                "country": "BW",
                "latitude": 85.766782,
                "longitude": -99.968812
            },
            "contact": {
                "email": "silvana38@example.com",
                "phone": "0731559679",
                "url": "https:\/\/www.pintilie.com\/accusantium-sit-aliquam-possimus-perferendis-aut-aut"
            },
            "distance": 47.04
        },
        {
            "id": 475,
            "name": "Necula-Ursu",
            "description": "Împărate, zise împărăteasa, zău aşa, ghiceşte-mi şi mie un gând. - Să nu fie decât adevărul pe lume! - Ferit-a Dumnezeu, măria-ta, fără învăţaţi cine să mintă lumea? - Să te sărut, că-mi umpluşi casa cu dragoste când îmi ziseşi mamă. - Încet, mamă, încet, că mă striveşti, zise Neghiniţă. - Să vedem, răspunse împăratul. Împărăteasa se gândi să ducă împăratului aşa minune. - Un împărat dacă n-a şti el de la rădăcină? Şi bătrâna începu să se închine. - Bine, mătuşă, bine, da’ de unde şi.",
            "type": "Cupiditate quia dolor consequatur et cum et delectus voluptatem.",
            "categories": [
                {
                    "id": 1,
                    "name": "Eum cupiditate est doloremque placeat nesciunt sit.",
                    "builtin": false
                }
            ],
            "location": {
                "address_line_1": "Str. Bega nr. 070, bl. B, ap. 20",
                "address_line_2": null,
                "city": "Filiași",
                "county": "Iași",
                "postal_code": "310606",
                "country": "KN",
                "latitude": 85.409596,
                "longitude": -88.242789
            },
            "contact": {
                "email": "musat.visarion@example.net",
                "phone": "0731135313",
                "url": "http:\/\/www.barbulescu.com\/"
            },
            "distance": 64.79
        }
    ]
}
```

### HTTP Request
`GET api/v1/entities/search`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `lat` |  required  | Latitude.
    `lng` |  required  | Longitude.
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

<!-- START_a90f973c81ffc9c1d05fa5beecb982b2 -->
## Get a single entity type
Retrieves a collection of entities that belong to the current type

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/types/3"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get('http://localhost/api/v1/types/3');
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/types/3'
response = requests.request('GET', url)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/types/3" 
```


> Example response (200):

```json
{
    "data": {
        "name": "Quae laborum at quia quisquam itaque.",
        "entities": [
            {
                "id": 3,
                "name": "Bogdan, Nedelcu and Toth"
            },
            {
                "id": 4,
                "name": "Stoian, Peter and Ichim"
            },
            {
                "id": 6,
                "name": "Moga LLC"
            },
            {
                "id": 10,
                "name": "Munteanu-Zaharia"
            },
            {
                "id": 12,
                "name": "Moga Inc"
            }
        ]
    }
}
```

### HTTP Request
`GET api/v1/types/{type}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `type` |  required  | The ID of the entity type.

<!-- END_a90f973c81ffc9c1d05fa5beecb982b2 -->


