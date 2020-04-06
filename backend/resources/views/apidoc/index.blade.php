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

fetch(url, {
    method: "GET",
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get('http://localhost/api/v1/categories');
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/categories'
response = requests.request('GET', url)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/categories" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/categories</code></p>
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
    "lat": "85.766782",
    "lng": "-94.2354",
    "radius": "100",
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
            'lat'=&gt; '85.766782',
            'lng'=&gt; '-94.2354',
            'radius'=&gt; '100',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/entities/search'
params = {
  'lat': '85.766782',
  'lng': '-94.2354',
  'radius': '100',
}
response = requests.request('GET', url, params=params)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/entities/search?lat=85.766782&amp;lng=-94.2354&amp;radius=100" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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

fetch(url, {
    method: "GET",
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get('http://localhost/api/v1/types');
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/types'
response = requests.request('GET', url)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/types" </code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/types</code></p>
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