<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="/docs/css/style.css" />
    <script src="/docs/js/all.js"></script>


          <script>
        $(function() {
            setupLanguages(["javascript","php","python","bash"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="javascript">javascript</a>
                                  <a href="#" data-language-name="php">php</a>
                                  <a href="#" data-language-name="python">python</a>
                                  <a href="#" data-language-name="bash">bash</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Categories</h1>
<!-- START_80420c095ed96da032c9eb419d7d6e2d -->
<h2>Get all categories</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/categories"
);

let params = {
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

fetch(url, {
    method: "GET",
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/v1/categories',
    [
        'query' =&gt; [
            'page'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/categories'
params = {
  'page': '1',
}
response = requests.request('GET', url, params=params)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/categories?page=1" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Quo velit id aut molestias."
        },
        {
            "id": 2,
            "name": "Velit aut repudiandae quis consequuntur aut."
        },
        {
            "id": 3,
            "name": "Dolor voluptas deleniti sit dolor sint consequatur."
        },
        {
            "id": 4,
            "name": "Nesciunt dolorem modi esse placeat."
        },
        {
            "id": 5,
            "name": "Rerum voluptatem voluptatem voluptatem expedita."
        },
        {
            "id": 6,
            "name": "Veritatis rerum expedita consectetur et dolores."
        },
        {
            "id": 7,
            "name": "Quo eaque itaque odit sed a."
        },
        {
            "id": 8,
            "name": "Similique quo laborum voluptas vel eos ratione ut."
        },
        {
            "id": 9,
            "name": "Architecto incidunt iste magnam sed sunt numquam id ex."
        },
        {
            "id": 10,
            "name": "Reiciendis maxime occaecati est dolor ex."
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/categories?page=1",
        "last": "http:\/\/localhost\/api\/v1\/categories?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/v1\/categories",
        "per_page": 15,
        "to": 10,
        "total": 10
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/categories</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>page</code></td>
<td>optional</td>
<td>The page number.</td>
</tr>
</tbody>
</table>
<!-- END_80420c095ed96da032c9eb419d7d6e2d -->
<!-- START_2378770b4f57b93f810abda7c44614b8 -->
<h2>Get a single category</h2>
<p>Retrieves a collection of entities that belong to the current category</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/categories/5"
);

fetch(url, {
    method: "GET",
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get('http://localhost/api/v1/categories/5');
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/categories/5'
response = requests.request('GET', url)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/categories/5" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "name": "Rerum voluptatem voluptatem voluptatem expedita.",
        "entities": [
            {
                "id": 1,
                "name": "Aldea-Ignat",
                "country": "GL"
            },
            {
                "id": 3,
                "name": "Cucu-Toma",
                "country": "KZ"
            },
            {
                "id": 5,
                "name": "Iosif, Pascu and Baciu",
                "country": "SR"
            },
            {
                "id": 6,
                "name": "Barbulescu, Rosca and Baciu",
                "country": "BL"
            },
            {
                "id": 12,
                "name": "Ene Ltd",
                "country": "MZ"
            }
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/categories/{category}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>category</code></td>
<td>required</td>
<td>The ID of the category.</td>
</tr>
</tbody>
</table>
<!-- END_2378770b4f57b93f810abda7c44614b8 -->
<h1>Entities</h1>
<!-- START_4288e7337688d08ee1ca084a9b8a3b76 -->
<h2>Get all entities</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/entities"
);

let params = {
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

fetch(url, {
    method: "GET",
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/v1/entities',
    [
        'query' =&gt; [
            'page'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/entities'
params = {
  'page': '1',
}
response = requests.request('GET', url, params=params)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/entities?page=1" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Aldea-Ignat",
            "country": "GL"
        },
        {
            "id": 2,
            "name": "Balint, Mirea and Stancu",
            "country": "MR"
        },
        {
            "id": 3,
            "name": "Cucu-Toma",
            "country": "KZ"
        },
        {
            "id": 4,
            "name": "Dragoi-Gavrila",
            "country": "MA"
        },
        {
            "id": 5,
            "name": "Iosif, Pascu and Baciu",
            "country": "SR"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/entities?page=1",
        "last": "http:\/\/localhost\/api\/v1\/entities?page=34",
        "prev": null,
        "next": "http:\/\/localhost\/api\/v1\/entities?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 34,
        "path": "http:\/\/localhost\/api\/v1\/entities",
        "per_page": 15,
        "to": 15,
        "total": 500
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/entities</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>page</code></td>
<td>optional</td>
<td>The page number.</td>
</tr>
</tbody>
</table>
<!-- END_4288e7337688d08ee1ca084a9b8a3b76 -->
<!-- START_a1414f1a639a9d59798dede94d307873 -->
<h2>Get a single entity</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/entities/2"
);

fetch(url, {
    method: "GET",
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get('http://localhost/api/v1/entities/2');
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/entities/2'
response = requests.request('GET', url)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/entities/2" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 2,
        "name": "Balint, Mirea and Stancu",
        "description": "Împăratul, cam de nevoie, răspunse: - Aşa o fi, se potriveşte ş-aşa, fiindcă ştii tu să cerni, şi ea să risipească, tu să pui de mămăligă, şi ea să răstoarne căldarea pe foc. - Dacă e pe-aşa, m-aş mulţumi şi pe-un copil cât ghemul, numai s-aud în casă \"mamă\", că mult e pustiu când uşa se închide peste doi bătrâni. - Da’ dacă ar fi mai mic?.",
        "type": "Beatae aperiam et et ut fugit eius id aliquid.",
        "categories": [
            "Quo velit id aut molestias.",
            "Velit aut repudiandae quis consequuntur aut.",
            "Dolor voluptas deleniti sit dolor sint consequatur.",
            "Nesciunt dolorem modi esse placeat.",
            "Reiciendis maxime occaecati est dolor ex."
        ],
        "location": {
            "address_line_1": "Calea Muncii 0A",
            "address_line_2": null,
            "city": "Sfântu Gheorghe",
            "county": "Arad",
            "postal_code": "917516",
            "country": "MR",
            "latitude": -53.359771,
            "longitude": -144.084054
        },
        "contact": {
            "email": "florea.staicu@example.net",
            "phone": "0355379914",
            "url": "http:\/\/ganea.info\/"
        }
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/entities/{entity}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>entity</code></td>
<td>required</td>
<td>The ID of the entity.</td>
</tr>
</tbody>
</table>
<!-- END_a1414f1a639a9d59798dede94d307873 -->
<!-- START_0bc6ff20cc4bbe3fa77e620bd3eebd49 -->
<h2>Search for entities</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/entities/search"
);

let params = {
    "lat": "41.3829",
    "lng": "2.17743",
    "radius": "50",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

fetch(url, {
    method: "GET",
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/v1/entities/search',
    [
        'query' =&gt; [
            'lat'=&gt; '41.3829',
            'lng'=&gt; '2.17743',
            'radius'=&gt; '50',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/entities/search'
params = {
  'lat': '41.3829',
  'lng': '2.17743',
  'radius': '50',
}
response = requests.request('GET', url, params=params)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/entities/search?lat=41.3829&amp;lng=2.17743&amp;radius=50" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 287,
            "name": "Macovei-Matei",
            "description": "Acu să-l vedem! zise împieliţatul de Neghiniţă. Împăratul ieşi plângând din cetate. Neghiniţă, sus pe umărul lui. - De ce plângi, măria-ta? ţine-ţi firea, nu fi muiere. - Ei, poi, înainte de-a fi împărat, vedea, auzea, muncea, cumpătat la.",
            "type": "Qui provident aperiam nesciunt non et reiciendis.",
            "categories": [
                "Quo velit id aut molestias.",
                "Velit aut repudiandae quis consequuntur aut.",
                "Nesciunt dolorem modi esse placeat.",
                "Veritatis rerum expedita consectetur et dolores.",
                "Reiciendis maxime occaecati est dolor ex."
            ],
            "location": {
                "address_line_1": "Splaiul Traian nr. 299, bl. 95, ap. 69",
                "address_line_2": null,
                "city": "Galați",
                "county": "Bihor",
                "postal_code": "617552",
                "country": "PN",
                "latitude": 41.582811,
                "longitude": 2.56642
            },
            "contact": {
                "email": "florea12@example.com",
                "phone": "0275603403",
                "url": "http:\/\/www.moldovan.com\/"
            },
            "distance": 39.29
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/entities/search</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>lat</code></td>
<td>required</td>
<td>Latitude.</td>
</tr>
<tr>
<td><code>lng</code></td>
<td>required</td>
<td>Longitude.</td>
</tr>
<tr>
<td><code>radius</code></td>
<td>optional</td>
<td>Show results only this many km away from the query coordinates. Defaults to 100.</td>
</tr>
<tr>
<td><code>country</code></td>
<td>optional</td>
<td>ISO 3166-1 alpha-2 country code.</td>
</tr>
</tbody>
</table>
<!-- END_0bc6ff20cc4bbe3fa77e620bd3eebd49 -->
<h1>Entity Types</h1>
<!-- START_c8c46f79ea22771862059c1f7bcb0e64 -->
<h2>Get all entity types</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/types"
);

let params = {
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

fetch(url, {
    method: "GET",
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/v1/types',
    [
        'query' =&gt; [
            'page'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/types'
params = {
  'page': '1',
}
response = requests.request('GET', url, params=params)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/types?page=1" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Beatae aperiam et et ut fugit eius id aliquid."
        },
        {
            "id": 2,
            "name": "Aut explicabo itaque id."
        },
        {
            "id": 3,
            "name": "Qui provident aperiam nesciunt non et reiciendis."
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/types?page=1",
        "last": "http:\/\/localhost\/api\/v1\/types?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/v1\/types",
        "per_page": 15,
        "to": 3,
        "total": 3
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/types</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>page</code></td>
<td>optional</td>
<td>The page number.</td>
</tr>
</tbody>
</table>
<!-- END_c8c46f79ea22771862059c1f7bcb0e64 -->
<!-- START_a90f973c81ffc9c1d05fa5beecb982b2 -->
<h2>Get a single entity type</h2>
<p>Retrieves a collection of entities that belong to the current type</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/types/3"
);

fetch(url, {
    method: "GET",
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get('http://localhost/api/v1/types/3');
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/types/3'
response = requests.request('GET', url)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/types/3" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "name": "Qui provident aperiam nesciunt non et reiciendis.",
        "entities": [
            {
                "id": 3,
                "name": "Cucu-Toma"
            },
            {
                "id": 9,
                "name": "Banu, Sandor and Stefan"
            },
            {
                "id": 10,
                "name": "Grigore-Cristea"
            },
            {
                "id": 11,
                "name": "Ionescu, Catana and Chivu"
            },
            {
                "id": 19,
                "name": "Iliescu PLC"
            }
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/types/{type}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>required</td>
<td>The ID of the entity type.</td>
</tr>
</tbody>
</table>
<!-- END_a90f973c81ffc9c1d05fa5beecb982b2 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                                    <a href="#" data-language-name="bash">bash</a>
                              </div>
                </div>
    </div>
  </body>
</html>