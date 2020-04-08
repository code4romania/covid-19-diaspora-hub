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


<!-- START_9c457f0f1bb03bc63b0dbafb340f9828 -->
## Get all entities without a location

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/entities/withoutLocation"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get('http://localhost/api/v1/entities/withoutLocation');
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/entities/withoutLocation'
response = requests.request('GET', url)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/entities/withoutLocation" 
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Sava-Tanase",
            "description": "Fie! Bătu palmă în palmă cu negustorul. Tocmeala se făcuse. Negustorul plăti şi luă pe Neghiniţă, vândut de bunăvoie. Negustorul plecă. Neghiniţă strigă moşului: - Moşule, moşule, ai fost să n-ai copii, iar biată babă, da! Împăratul era la mare şi la băutură. Bietul pribeag stătu pe gânduri, în mijlocul unui oraş mare, mare şi zise: - Ei, ei, ce n-ar.",
            "type": "Repellendus tempore impedit ea beatae repellat.",
            "categories": [
                {
                    "id": 7,
                    "name": "Minus in et ad saepe.",
                    "builtin": false
                }
            ],
            "address": [
                "B-dul. Traian 1B",
                "869375, Milișăuți",
                "Caraș-Severin, Kuwait"
            ],
            "latlng": null,
            "distance": null,
            "contact": {
                "email": "xbratu@example.com",
                "phone": "0718377594",
                "url": "http:\/\/www.bratu.org\/"
            }
        },
        {
            "id": 5,
            "name": "Sima, Cosma and Marinescu",
            "description": "Bătrâna simţi pe mână o picătura caldă. - Iacătă-mă şi pe mine!… Biata femeie făcu nişte ochi mari cât toate zilele şi se miră toată de ce vedea se minuna şi întreba pe Neghiniţă: - Sufletele se dăruiesc Domnului şi se răsti cât putu: - Neghiniţă, ci tacă-ţi gura şi vin să te văd! Şi.",
            "type": "Repellendus tempore impedit ea beatae repellat.",
            "categories": [
                {
                    "id": 5,
                    "name": "Eum minus aut sapiente dolorem tenetur.",
                    "builtin": false
                }
            ],
            "address": [
                "Aleea Herculane 6",
                "961687, Mun. Zlatna",
                "Argeș, Central African Republic"
            ],
            "latlng": null,
            "distance": null,
            "contact": {
                "email": "lucentiu12@example.net",
                "phone": "0341952331",
                "url": "http:\/\/manole.com\/numquam-est-veniam-et-ipsum-laudantium"
            }
        },
        {
            "id": 19,
            "name": "Manole, Sava and Ganea",
            "description": "Bătrâna pierdu sfiala şi răbdarea şi se traseră de bărbile lungi. - Nu căta că-s mititel. Calul nu e aşa deloc. Eu mă satur din fum. Până acum am mâncat la mese împărăteşti fără să ştie nimeni. Şi ce-am mai râs când ceilalţi tremurau înaintea.",
            "type": "Repellendus tempore impedit ea beatae repellat.",
            "categories": [
                {
                    "id": 1,
                    "name": "Eum cupiditate est doloremque placeat nesciunt sit.",
                    "builtin": false
                },
                {
                    "id": 10,
                    "name": "Odit alias porro aspernatur aut maiores perspiciatis.",
                    "builtin": true
                }
            ],
            "address": [
                "B-dul. Decebal 743",
                "353386, Scornicești",
                "Neamț, Cook Islands"
            ],
            "latlng": null,
            "distance": null,
            "contact": {
                "email": "voicu.gheorghita@example.org",
                "phone": "0783288295",
                "url": "http:\/\/burlacu.biz\/et-ut-eveniet-distinctio-doloremque-quos"
            }
        },
        {
            "id": 30,
            "name": "Ispas PLC",
            "description": "Şi într-o clipă intră în urechea cărturarului care zicea că ştie măruntaiele omului şi leacurile bolilor. Ăsta se gândea la o cucoană frumoasă, că altul se gândea cam ce linguşeală să cârpească împăratului, altul că bine e să fii împărat, altul că bine e să fii împărat, altul că împăratul e om ca toţi oamenii, da’ nu se mai isprăveau până după miezul nopţii.\" În sfârşit, ce-i veni lui.",
            "type": "Repellendus tempore impedit ea beatae repellat.",
            "categories": [
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
                }
            ],
            "address": [
                "P-ța Ion Creangă 79",
                "892007, Mun. Arad",
                "Tulcea, Armenia"
            ],
            "latlng": null,
            "distance": null,
            "contact": {
                "email": "gmoraru@example.com",
                "phone": "0245735033",
                "url": "http:\/\/ganea.com\/est-quaerat-maxime-velit-nulla-et-amet"
            }
        }
    ]
}
```

### HTTP Request
`GET api/v1/entities/withoutLocation`


<!-- END_9c457f0f1bb03bc63b0dbafb340f9828 -->

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


