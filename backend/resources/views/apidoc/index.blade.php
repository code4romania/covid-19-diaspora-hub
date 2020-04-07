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
<h1>Entities</h1>
<!-- START_0bc6ff20cc4bbe3fa77e620bd3eebd49 -->
<h2>Search for entities</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
            'categories[]'=&gt; '8',
            'lat'=&gt; '85.766782',
            'lng'=&gt; '-94.2354',
            'country'=&gt; 'BW',
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
  'categories[]': '8',
  'lat': '85.766782',
  'lng': '-94.2354',
  'country': 'BW',
  'radius': '100',
}
response = requests.request('GET', url, params=params)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/entities/search?categories[]=8&amp;lat=85.766782&amp;lng=-94.2354&amp;country=BW&amp;radius=100" </code></pre>
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
<td><code>categories[]</code></td>
<td>required</td>
<td>List of category ids to return.</td>
</tr>
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
<td><code>country</code></td>
<td>required</td>
<td>ISO 3166-1 alpha-2 country code.</td>
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