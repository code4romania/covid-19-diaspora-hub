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
## Get all builtin categories

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
            "id": 9,
            "name": "Omnis beatae accusamus harum nihil aspernatur sed.",
            "builtin": true
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

#Diplomatic missions


<!-- START_76699d681f38e3c235a53f2380b5e53a -->
## Get all diplomatic missions

> Example request:

```javascript
const url = new URL(
    "http://localhost/api/v1/diplomatic-missions"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get('http://localhost/api/v1/diplomatic-missions');
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/diplomatic-missions'
response = requests.request('GET', url)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost/api/v1/diplomatic-missions" 
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "city": "Abu Dhabi",
            "address": "2nd Str.no.9, W(14\/1) plot no.13 at AL RODHA Area, P.O.Box 70416, Abu Dhabi",
            "email": "contact@informatiiconsulare.ro ",
            "phone": "+971 244 61 158",
            "url": "http:\/\/abudhabi.mae.ro"
        },
        {
            "id": 2,
            "city": "Abuja",
            "address": "No.76, Plot 498, Nelson Mandela Street, Asokoro, Abuja, FCT, Republica Federala Nigeria",
            "email": "romnig1@gmail.com",
            "phone": "+234 (0) 9038411860",
            "url": "http:\/\/abuja.mae.ro"
        },
        {
            "id": 3,
            "city": "Addis Abeba",
            "address": "Woreda 17, Kebele 19, Houses No. 09 – 10, P.O. Box: 2478, Addis Ababa, Ethiopia",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+251 116 622 675",
            "url": "http:\/\/addisbeba.mae.ro"
        },
        {
            "id": 4,
            "city": "Alger",
            "address": "24, Rue Abri Arezki, Hydra, 16035",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+213 21 693489",
            "url": "htp:\/\/alger.mae.ro"
        },
        {
            "id": 5,
            "city": "Almeria",
            "address": "Carretera Huércal de Almería 46, 04009 Almería",
            "email": "almeria@mae.ro",
            "phone": "+34 950 625963",
            "url": "http:\/\/almeria.mae.ro"
        },
        {
            "id": 6,
            "city": "Amman",
            "address": "35, Al-Madeenah Al-Munawarah St., PO BOX 2869, Amman, 11181",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+962 6 5812627",
            "url": "http:\/\/amman.mae.ro"
        },
        {
            "id": 7,
            "city": "Ankara",
            "address": "Kiz Kulesi Sok. no. 7, Gazi Osman Pasa (GOP), 06610 Ankara",
            "email": "contact@informatiiconsulare.ro",
            "phone": " +90 312.44.77.940",
            "url": "http:\/\/ankara.mae.ro "
        },
        {
            "id": 8,
            "city": "Ashgabat",
            "address": "Str. Myati Kosayew, nr. 122, Ashgabat",
            "email": "ashabat@mae.ro",
            "phone": "+ 993 12 347 633?",
            "url": "http:\/\/ashgabat.mae.ro"
        },
        {
            "id": 9,
            "city": "Nur-Sultan",
            "address": "Adresa: Str. Saraisâk nr. 28, Nur-Sultan",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+7 717 28 60 44",
            "url": "http:\/\/astana.mae.ro"
        },
        {
            "id": 10,
            "city": "Atena",
            "address": "Emmanouil Benaki 7, 15452 Paleo Psyxiko, Atena",
            "email": "sectiaconsulara@romaniaemb.gr",
            "phone": "+30 2106728879",
            "url": "http:\/\/atena.mae.ro"
        },
        {
            "id": 11,
            "city": "Bagdad",
            "address": "Arassat Al-Hindia Street, Hay Babel Mahalla 929, Zuqaq 31, Nr. 452\/A, Baghdad, P.O.Box 2571",
            "email": " bagdad.cons@mae.ro",
            "phone": "00-964-1-778.28.60",
            "url": "http:\/\/bagdad.mae.ro"
        },
        {
            "id": 12,
            "city": "Baku",
            "address": "Blv. Hasan Aliev nr. 125 A (Narimanov)",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+994 12 465 09 25",
            "url": "http:\/\/baku.mae.ro"
        },
        {
            "id": 13,
            "city": "Bălţi",
            "address": "Strada Sfântul Nicolae nr. 51, 3100 Balti",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+373 0231 80002",
            "url": "http:\/\/balti.mae.ro"
        },
        {
            "id": 14,
            "city": "Bangkok",
            "address": "3388\/41 Sirinrat Office Building, 12th Floor, Rama IV Road, Khlong Toei, Bangkok 10110",
            "email": "contact@informatiiconsulare.ro ",
            "phone": " +66-(0)-2-240.25-21",
            "url": "http:\/\/bangkok.mae.ro"
        },
        {
            "id": 15,
            "city": "Barcelona",
            "address": "Calle San Juan de la Salle 35 bis, 08022 Barcelona",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+34 934 181 535",
            "url": "http:\/\/barcelona.mae.ro"
        },
        {
            "id": 16,
            "city": "Beijing",
            "address": " Str. Ritan Est, nr. 2, districtul Chaoyang, Beijing, 100600",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+86 10 6532 3616",
            "url": "http:\/\/beijing.mae.ro"
        },
        {
            "id": 17,
            "city": "Beirut",
            "address": "Rue du Palais Présidentiel, Baabda, B.P. 40227",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+961 5 924 849",
            "url": "http:\/\/beirut.mae.ro"
        },
        {
            "id": 18,
            "city": "Belgrad",
            "address": "Miloja Ðaka 1c, 11040 Beograd",
            "email": "belgrad.consul@mae.ro ",
            "phone": "+381 11 36 70 362",
            "url": "http:\/\/belgrad.mae.ro"
        },
        {
            "id": 19,
            "city": "Berlin",
            "address": "Dorotheenstrasse 62 - 66, 10117 Berlin",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+ 49 30 21239555",
            "url": "http:\/\/berlin.mae.ro"
        },
        {
            "id": 20,
            "city": "Berna",
            "address": "Brunnadernstrasse 20, 3006 Bern",
            "email": "contact@informatiiconsulare.ro ",
            "phone": " +41-31-351 36 39",
            "url": "http:\/\/berna.mae.ro"
        },
        {
            "id": 21,
            "city": "Bilbao",
            "address": "Plaza Circular  nº.4, 48001 Bilbao",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+34 944 233 963",
            "url": "http:\/\/bilbao.mae.ro"
        },
        {
            "id": 22,
            "city": "Bogota",
            "address": "Carrera 7, Nr 92A-58, Chico, Bogota",
            "email": "bogota.consul@mae.ro",
            "phone": "+571 256.67.19",
            "url": "http:\/\/bogota.mae.ro"
        },
        {
            "id": 23,
            "city": "Bologna",
            "address": "Via Guelfa 9, 40138 Bologna (BO)",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+39 051 5872120",
            "url": "http:\/\/bologna.mae.ro"
        },
        {
            "id": 24,
            "city": "Bonn",
            "address": "Legionsweg 14, 53117 Bonn",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+49 228 68 38 135",
            "url": "http:\/\/bonn.mae.ro"
        },
        {
            "id": 25,
            "city": "Brasilia",
            "address": "SEN 6 - Asa Norte, Avenida das Nacoes, Quadra 801, Lote 06, Brasilia DF, CEP: 70.800-917",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+55 61 3225 8992",
            "url": "http:\/\/brasilia.mae.ro"
        },
        {
            "id": 26,
            "city": "Bratislava",
            "address": "Str. Fraňa Kraľa, nr.11, Staré Mesto, Bratislava, 81105, Slovacia",
            "email": "contact@informatiiconsulare.ro",
            "phone": "00421-2-20727147",
            "url": "http:\/\/bratislava.mae.ro\/"
        },
        {
            "id": 27,
            "city": "Bruxelles",
            "address": "Boulevard du Régent 47-48, 1000 Bruxelles",
            "email": "contact@informatiiconsulare.ro ",
            "phone": "+32 (0)2 347 5338",
            "url": "http:\/\/bruxelles.mae.ro"
        },
        {
            "id": 28,
            "city": "Budapesta",
            "address": "1146 Budapest, Thököly út 72",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+36-1-384.76.89",
            "url": "http:\/\/budapesta.mae.ro"
        },
        {
            "id": 29,
            "city": "Buenos Aires",
            "address": "Calle Arroyo 962-970, C1007AAD, Buenos Aires, Argentina",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+54 11 4322 8656",
            "url": "http:\/\/buenosaires.mae.ro"
        },
        {
            "id": 30,
            "city": "Cahul",
            "address": "Strada B.P. Hasdeu nr. 11, Cahul, Republica Moldova",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+373 299 80001",
            "url": "http:\/\/cahul.mae.ro"
        },
        {
            "id": 31,
            "city": "Cairo",
            "address": " 6, El-Kamel Mohamed Street, Zamalek, Cairo",
            "email": "contact@informatiiconsulare.ro ",
            "phone": "+202 2735 53 26",
            "url": "http:\/\/cairo.mae.ro"
        },
        {
            "id": 32,
            "city": "Canberra",
            "address": "4 Dalman Crescent, O'Malley, A.C.T. 2606, Canberra",
            "email": "contact@informatiiconsulare.ro ",
            "phone": "0061 2 62862343",
            "url": "http:\/\/canberra.mae.ro"
        },
        {
            "id": 33,
            "city": "Cape Town",
            "address": "Helderberg House, 24 Highwick Drive, 7708 Kenilworth",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+27 021 761 1781",
            "url": "http:\/\/capetown.mae.ro"
        },
        {
            "id": 34,
            "city": "Caracas",
            "address": "4-a Avenida de Altamira, entre 8-a y 9-a Transverasles, Quinta Guardatinajas, no.49-14, Chacao, Caracas",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+58 212 264 12 26",
            "url": "http:\/\/caracas.mae.ro"
        },
        {
            "id": 35,
            "city": "Castellón de la Plana",
            "address": "Avenida de Valencia nr. 144 (esquina Rambla de la Viuda) - 12006 Castellón de la Plana",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+34 964 206764",
            "url": "http:\/\/castellon.mae.ro"
        },
        {
            "id": 36,
            "city": "Catania",
            "address": "Via Misterbianco, nr. 1, 95131, Catania",
            "email": "contact@informatiiconsulare.ro",
            "phone": "39 095 537 909",
            "url": "http:\/\/catania.mae.ro"
        },
        {
            "id": 37,
            "city": "Cernăuţi",
            "address": "Strada Skilna (strada Scolii) nr. 16, Cernauti",
            "email": "contact@informatiiconsulare.ro",
            "phone": "380372545434",
            "url": "http:\/\/cernauti.mae.ro"
        },
        {
            "id": 38,
            "city": "Chicago",
            "address": "737 N. Michigan Ave, Suite 2300, Chicago, IL 60611 (intrarea se face la adresa 151 E. Chicago Ave)",
            "email": "contact@informatiiconsulare.ro",
            "phone": "(001) (312)-573-1315",
            "url": "http:\/\/chicago.mae.ro"
        },
        {
            "id": 39,
            "city": "Chişinău",
            "address": "Chişinău, Str. Grigore Ureche nr. 2",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+373 22 260 737",
            "url": "http:\/\/chisinau.mae.ro"
        },
        {
            "id": 40,
            "city": "Ciudad de Mexico",
            "address": "Calle Sofocles, num. 311, Colonia Polanco, Delegacion Miguel Hidalgo, 11560",
            "email": "contact@informatiiconsulare.ro",
            "phone": "00 52 55 5280 0197",
            "url": "http:\/\/mexico.mae.ro"
        },
        {
            "id": 41,
            "city": "Ciudad Real",
            "address": "Calle Mata, 37, 13004, Ciudad Real",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+34 926 226 825",
            "url": "http:\/\/ciudadreal.mae.ro"
        },
        {
            "id": 42,
            "city": "Colombo",
            "address": "25\/1, Horton Place, Colombo 07",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+94 11 2676520",
            "url": "http:\/\/colombo.mae.ro"
        },
        {
            "id": 43,
            "city": "Copenhaga",
            "address": "Strandagervej 27, 2900 Hellerup",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+45 30 80 34 08",
            "url": "http:\/\/copenhaga.mae.ro"
        },
        {
            "id": 44,
            "city": "Dakar",
            "address": "Point E, Rue Ax9A, B.P. 3212, Senegal ",
            "email": "dakar.cons@mae.ro",
            "phone": "(00 221) 33 824 81 57",
            "url": "http:\/\/dakar.mae.ro"
        },
        {
            "id": 45,
            "city": "Damasc",
            "address": "Str. Ibrahim Hanano nr.8, Cartier Al-Maliki, P.O. Box 4454, Damascus",
            "email": "consulara@gmail.com ",
            "phone": "00-963-11-334.895.21",
            "url": "http:\/\/damasc.mae.ro"
        },
        {
            "id": 46,
            "city": "Doha",
            "address": "Str. 953, nr.102, zona 65, Dafna Area, Doha, P.O.Box 22511",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+974 40 371 220",
            "url": "http:\/\/doha.mae.ro"
        },
        {
            "id": 47,
            "city": "Dubai",
            "address": "Street 12b, Villa no. 44, Community 332, Jumeirah 1, P.O. Box 333765, Dubai, UAE",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+971 4 3492974",
            "url": "http:\/\/dubai.mae.ro"
        },
        {
            "id": 48,
            "city": "Dublin",
            "address": "26 Waterloo Road, Ballsbridge, Dublin 4",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+353 1 66 81 150",
            "url": "http:\/\/dublin.mae.ro"
        },
        {
            "id": 49,
            "city": "Edinburgh",
            "address": "7-9 North St. David Street, Edinburgh, EH2 1AW",
            "email": "edinburgh@mae.ro \/ contact@informatiiconsulare.ro",
            "phone": "+44 (0) 131 524 9491 \/ +44 (0) 131 524 9491",
            "url": "www.econsulat.ro \/ https:\/\/edinburgh.mae.ro"
        },
        {
            "id": 50,
            "city": "Erbil",
            "address": "Gulan Street, Ster Tower, Floor 7, unit 702, Erbil, Regiunea Kurdistan",
            "email": "erbil@mae.ro",
            "phone": "+964 66 2246715",
            "url": ""
        },
        {
            "id": 51,
            "city": "Erevan",
            "address": "Str. Barbusse, nr.15, cartierul Arabkir, Erevan",
            "email": "ambrom@netsys.am",
            "phone": "+374 10 227610",
            "url": "http:\/\/erevan.mae.ro"
        },
        {
            "id": 52,
            "city": "Gyula",
            "address": "5700 Gyula, Strada Munkácsy, nr.12a",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+36 66 464 579",
            "url": "http:\/\/gyula.mae.ro"
        },
        {
            "id": 53,
            "city": "Haga",
            "address": "Catsheuvel 55, 2517 KA, Haga",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+ 31 (0) 70 322 36 13",
            "url": "http:\/\/haga.mae.ro"
        },
        {
            "id": 54,
            "city": "Hanoi",
            "address": "5 Le Hong Phong Street, Hanoi",
            "email": "romambhan@fpt.vn",
            "phone": " +84 43 8452014",
            "url": ""
        },
        {
            "id": 55,
            "city": "Harare",
            "address": "105, Fourth Street\/Cnr. Chinamano, Harare",
            "email": "romemb@comone.co.zw",
            "phone": "00 263 4 700 832 ",
            "url": "http:\/\/harare.mae.ro"
        },
        {
            "id": 56,
            "city": "Havana",
            "address": "Avenida 5ta A, no4407, e\/44 y 46, Miramar, Havana",
            "email": "contact@informatiiconsulare.ro ",
            "phone": "+537 214 49 22",
            "url": "http:\/\/havana.mae.ro"
        },
        {
            "id": 57,
            "city": "Helsinki",
            "address": "Str. Stenbäckinkatu 24, 00250 Helsinki, Finlanda",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+358 9 2413624",
            "url": "http:\/\/helsinki.mae.ro"
        },
        {
            "id": 58,
            "city": "Hong Kong",
            "address": "03A Office, 21\/F, 148 Electric Road, North Point, Hong Kong",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+852 2523 3817",
            "url": "http:\/\/hongkong.mae.ro"
        },
        {
            "id": 59,
            "city": "Islamabad",
            "address": "Casa nr. 5, Strada Nr. 30, Sector F-7\/1, Islamabad 44000",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+92 51 8441476",
            "url": "http:\/\/islamabad.mae.ro"
        },
        {
            "id": 60,
            "city": "Istanbul",
            "address": "Yanarsu sok., Narin Sitesi, nr. 42, Etiler, Besiktas",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+90 212 3583541",
            "url": "http:\/\/istanbul.mae.ro"
        },
        {
            "id": 61,
            "city": "Izmir",
            "address": "1479 Sokak no. 9, 35220, Alsancak, Izmir",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+90 232 4650579",
            "url": "http:\/\/izmir.mae.ro"
        },
        {
            "id": 62,
            "city": "Jakarta",
            "address": "42A, Jl Teuku Cik Ditiro, Menteng, Jakarta Pusat 10310",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+62 21 310 62 40",
            "url": "http:\/\/jakarta.mae.ro"
        },
        {
            "id": 63,
            "city": "Kabul",
            "address": "",
            "email": " kabul.cons@mae.ro",
            "phone": "+93 793 197 448",
            "url": ""
        },
        {
            "id": 64,
            "city": "Khartoum",
            "address": "Kafouri Area - Kassala Road, Plot 172\/173 Khartoum North, Khartoum, Republic of Sudan, P.O. Box 1494",
            "email": "khartoum@mae.ro",
            "phone": "+249 1 85338114",
            "url": "http:\/\/khartoum.mae.ro"
        },
        {
            "id": 65,
            "city": "Kiev",
            "address": "Kiev, str. Gogolevska 4, cod postal: 01054, raion Shevcenko",
            "email": " contact@informatiiconsulare.ro",
            "phone": "+38 044 500 9932",
            "url": "http:\/\/kiev.mae.ro"
        },
        {
            "id": 66,
            "city": "Kuala Lumpur",
            "address": "114 Jalan Damai off Jalan Ampang, Kuala Lumpur 55000, Malaysia",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+60 3 21423172",
            "url": "http:\/\/kualalumpur.mae.ro"
        },
        {
            "id": 67,
            "city": "Kuweit",
            "address": "Keifan, AREA 4, MINA Street, House 34, P.O. BOX Kaifan 13574 cod 35152",
            "email": " kuwait@mae.ro",
            "phone": "+965 2484.50.79",
            "url": "http:\/\/kuweit.mae.ro"
        },
        {
            "id": 68,
            "city": "Lima",
            "address": "Avenida Jorge Basadre no.690, San Isidro, Lima 27",
            "email": "lima@mae.ro",
            "phone": " +51 1 422.45.87",
            "url": "http:\/\/lima.mae.ro\/"
        },
        {
            "id": 69,
            "city": "Lisabona",
            "address": "Rua de Sao Caetano 5, 1200-828 Lisabona",
            "email": " contact@informatiiconsulare.ro",
            "phone": "+351 21 396 6463",
            "url": "http:\/\/lisabona.mae.ro\/"
        },
        {
            "id": 70,
            "city": "Ljubljana",
            "address": "Smrekarjeva 33a, 1107 Ljubljana",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+386 1 5058294",
            "url": "http:\/\/ljubljana.mae.ro\/"
        },
        {
            "id": 71,
            "city": "Londra",
            "address": "M.E.I.C. House, 344 Kensington High Street, Londra W14 8NS",
            "email": "contact@informatiiconsulare.ro ",
            "phone": " +44 20 76027328",
            "url": "http:\/\/londra.mae.ro\/"
        },
        {
            "id": 72,
            "city": "Los Angeles",
            "address": "11766 Wilshire Blvd. Suite 200, Los Angeles CA 90025",
            "email": "losangeles.cons1@mae.ro",
            "phone": "+1 310-444-0623",
            "url": "http:\/\/losangeles.mae.ro\/"
        },
        {
            "id": 73,
            "city": "Luanda",
            "address": "Rua Ramalho Ortigão, Nº30, Bairro Alvalade, Luanda",
            "email": "contact@informatiiconsulare.ro",
            "phone": " + 244 222 322 234",
            "url": "http:\/\/luanda.mae.ro\/"
        },
        {
            "id": 74,
            "city": "Luxemburg",
            "address": "2, Rue de Pulvermühl, L-2356, Luxemburg",
            "email": "contact@informatiiconsulare.ro",
            "phone": " +352 26 45 81 64",
            "url": "http:\/\/luxemburg.mae.ro\/"
        },
        {
            "id": 75,
            "city": "Lyon",
            "address": "1, Rue Le Royer, 69003 Lyon",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+33 4 78 60 70 77",
            "url": "http:\/\/lyon.mae.ro"
        },
        {
            "id": 76,
            "city": "Madrid",
            "address": "Av. de la Albufera, nr. 319, 28031, Madrid",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+34 917344004",
            "url": "http:\/\/madrid.mae.ro\/"
        },
        {
            "id": 77,
            "city": "Manila",
            "address": "Strada Legazpi nr.150, G.C. Corporate Plaza, etajul 6, Legaspi Village, Makati City, CP 1229",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+ 63 2 8439014",
            "url": "http:\/\/manila.mae.ro\/"
        },
        {
            "id": 78,
            "city": "Marsilia",
            "address": "157, bd. Michelet, 13009 Marsilia - Franta",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+33 4 91221741",
            "url": "http:\/\/marsilia.mae.ro\/"
        },
        {
            "id": 79,
            "city": "Milano",
            "address": "Via Gignese 2, 20148 Milano",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+39 02.40074018",
            "url": "http:\/\/milano.mae.ro\/"
        },
        {
            "id": 80,
            "city": "Minsk",
            "address": "Kaliningradskii pereulok, 12, 220012, Minsk",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+375 17 2927300",
            "url": "http:\/\/minsk.mae.ro\/"
        },
        {
            "id": 81,
            "city": "Montevideo",
            "address": "Echevarriarza 3452, Montevideo",
            "email": "montevideo@mae.ro",
            "phone": "+598 2 6220135",
            "url": ""
        },
        {
            "id": 82,
            "city": "Montreal",
            "address": "1010, rue Sherbrooke Ouest, bureau 610, etaj 6, H3A 2R7, Montreal, Québec",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+1 514 876 1792",
            "url": "http:\/\/montreal.mae.ro\/"
        },
        {
            "id": 83,
            "city": "Moscova",
            "address": "119590, Moscova, Mosfilmovskaia ulita nr. 64",
            "email": "moscova.cons@mae.ro",
            "phone": " +7 499 143 0350",
            "url": "http:\/\/moscova.mae.ro\/"
        },
        {
            "id": 84,
            "city": "München",
            "address": "Richard-Strauss-Strasse 149, 81679 München",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+49 89 553307",
            "url": "http:\/\/munchen.mae.ro\/"
        },
        {
            "id": 85,
            "city": "Nairobi",
            "address": "Eliud Mathu Street 1119, Runda, Nairobi P.O. Box 63240-00619, Nairobi, Kenya",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+254.721,214,073",
            "url": "www.econsulat.ro"
        },
        {
            "id": 86,
            "city": "New Delhi",
            "address": " D 6\/6, Vasant Vihar, New Delhi",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+91 11 26141663",
            "url": "http:\/\/newdelhi.mae.ro\/"
        },
        {
            "id": 87,
            "city": "New York",
            "address": "200 East, 38th Street, New York, NY 10016",
            "email": "contact@informatiiconsulare.ro",
            "phone": " 001 212 682-9120",
            "url": "http:\/\/newyork.mae.ro\/"
        },
        {
            "id": 88,
            "city": "Nicosia",
            "address": "Str. Piraeos, nr. 27, Strovolos, C.P. 2023, Nicosia, Cipru",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+357 22 495 333",
            "url": "http:\/\/nicosia.mae.ro\/"
        },
        {
            "id": 89,
            "city": "Odesa",
            "address": "Bazarnaia, nr.31, 650011, Odessa",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+38048 7221017",
            "url": "http:\/\/odessa.mae.ro\/"
        },
        {
            "id": 90,
            "city": "Oslo",
            "address": "Oscars gate 51, 0244 Oslo, Norway",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+ 47 22 561237",
            "url": "http:\/\/oslo.mae.ro\/"
        },
        {
            "id": 91,
            "city": "Ottawa",
            "address": "655 Rideau Street, Ottawa, Ontario, K1N 6A3",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+(1) (613) 789 9361",
            "url": "http:\/\/ottawa.mae.ro\/"
        },
        {
            "id": 92,
            "city": "Paris",
            "address": "5, rue de l'Exposition, 75343 Paris cedex 07",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+33 (0)1 47 05 29 66",
            "url": "http:\/\/paris.mae.ro\/"
        },
        {
            "id": 93,
            "city": "Phenian",
            "address": "Pyongyang City, Munhengdong, Phenian",
            "email": "ambrophe@gmail.com",
            "phone": "0086 10 65442344",
            "url": "http:\/\/phenian.mae.ro\/"
        },
        {
            "id": 94,
            "city": "Podgoriţa",
            "address": "Ulica Prve Proleterske, br. 5, 81000 Podgorica",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+382 20 618 041",
            "url": "http:\/\/podgorica.mae.ro\/"
        },
        {
            "id": 95,
            "city": "Praga",
            "address": "Strada Nerudova nr. 5, Mala Strana, 118 00, Praga 1, Republica Ceha",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+420 257 532090",
            "url": "http:\/\/praga.mae.ro\/"
        },
        {
            "id": 96,
            "city": "Pretoria",
            "address": "877 Justice Mahomed Street (fosta 117 Charles Street), Brooklyn, 0181, Pretoria",
            "email": "contact@informatiiconsulare.ro ",
            "phone": "(+ 27) 124600061",
            "url": "http:\/\/pretoria.mae.ro\/"
        },
        {
            "id": 97,
            "city": "Rabat",
            "address": "10, Rue Ouazzane, Hassan",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+212 537 72 14 93",
            "url": "http:\/\/rabat.mae.ro\/"
        },
        {
            "id": 98,
            "city": "Ramallah",
            "address": "Commercial Tower Building, 5-th floor, Ramallah – Al Bireh ",
            "email": "romofficeramallah@gmail.com",
            "phone": "+972 22 401025",
            "url": ""
        },
        {
            "id": 99,
            "city": "Rio de Janeiro",
            "address": "Rua Cosme Velho nr.526 - Bairro Cosme Velho, Rio de Janeiro, CEP 22241- 091",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+55 21 3495 8706",
            "url": "http:\/\/riodejaneiro.mae.ro\/"
        },
        {
            "id": 100,
            "city": "Riad",
            "address": "King Fahad Quarter, Amin Al Reehani Street, Villa no.8 PO Box: 94319 - Riyadh - 11693",
            "email": "consular@embrom.org.sa",
            "phone": "00966-11-456.62.05",
            "url": "http:\/\/riyadh.mae.ro\/"
        },
        {
            "id": 101,
            "city": "Roma",
            "address": "Viale Libano,nr. 40, C.A.P.00144 Roma",
            "email": "contact@informatiiconsulare.ro",
            "phone": "(+39) 06 835 233 44",
            "url": "http:\/\/roma.mae.ro\/"
        },
        {
            "id": 102,
            "city": "Rostov pe Don",
            "address": "Ulita Sedmaia Linia, nr. 18\/39, Rostov Na Donu",
            "email": "rostovpedon@mae.ro",
            "phone": "+7 863 2530861",
            "url": "http:\/\/rostov.mae.ro\/"
        },
        {
            "id": 103,
            "city": "Salonic",
            "address": "Str. Theagenous Charisi, nr. 78, 54639 Salonic",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+30 2310 340088",
            "url": "http:\/\/salonic.mae.ro\/"
        },
        {
            "id": 104,
            "city": "Sankt Petersburg",
            "address": "Str. Gorohovaia nr. 4, Sankt Petersburg, cod. 191186",
            "email": "sanktpetersburg@mae.ro",
            "phone": "+7812 3126141",
            "url": "http:\/\/sanktpetersburg.mae.ro\/"
        },
        {
            "id": 105,
            "city": "Santiago de Chile",
            "address": "Santiago de Chile, Str. Benjamin nr. 2955, cartier Las Condes",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+56 2 223 23441",
            "url": "http:\/\/santiagodechile.mae.ro\/"
        },
        {
            "id": 106,
            "city": "Sarajevo",
            "address": "Cobanija 28, Sarajevo, 71000",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+387 33 66 88 93",
            "url": "http:\/\/sarajevo.mae.ro\/"
        },
        {
            "id": 107,
            "city": "Seul",
            "address": "50 Jangmun-ro, Yongsan-gu, Seoul, 140-809",
            "email": "contact@informatiiconsulare.ro",
            "phone": " +82 2 797-4924",
            "url": "http:\/\/seoul.mae.ro"
        },
        {
            "id": 108,
            "city": "Sevilla",
            "address": "Avenida Manuel Siurot no. 30, cod postal 41013, Sevilla",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+34 954 233 243",
            "url": "https:\/\/sevilla.mae.ro\/"
        },
        {
            "id": 109,
            "city": "Shanghai",
            "address": "502 Room, Honi International Plaza, 199 Chengdu North Road, Jing An District, Shanghai, 200041, P.R. China",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+86 21 6270 1146",
            "url": "http:\/\/shanghai.mae.ro\/"
        },
        {
            "id": 110,
            "city": "Singapore",
            "address": "King's Centre #03-04\/05, 390 Havelock Road, Singapore 169662",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+65 67355025",
            "url": "http:\/\/singapore.mae.ro\/"
        },
        {
            "id": 111,
            "city": "Skopje",
            "address": "Strada Rajko Zinzifov, nr. 42, 1000 Skopje",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+389 2 3228058",
            "url": "http:\/\/skopje.mae.ro\/"
        },
        {
            "id": 112,
            "city": "Sofia",
            "address": "Str. Shipchenski Prohod nr.1, Sofia",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+359 2 9733510",
            "url": "http:\/\/sofia.mae.ro\/"
        },
        {
            "id": 113,
            "city": "Stockholm",
            "address": "Östermalmsgatan 36, 114 26, Stockholm",
            "email": "contact@informatiiconsulare.ro",
            "phone": "0046-8-20.56.74",
            "url": "http:\/\/stockholm.mae.ro\/"
        },
        {
            "id": 114,
            "city": "Strasbourg",
            "address": "41, rue Schweighaeuser, 67000 Strasbourg",
            "email": "contact@informatiiconsulare.ro",
            "phone": "33388437173",
            "url": "http:\/\/strasbourg.mae.ro\/"
        },
        {
            "id": 115,
            "city": "Sydney",
            "address": "Ground Floor\/83 York Street, Sydney, NSW, 2000",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+61 2 92993764",
            "url": "http:\/\/sydney.mae.ro\/"
        },
        {
            "id": 116,
            "city": "Szeged",
            "address": "6720 Szeged, Kelemen László utca 5",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+36 62 424 431",
            "url": "http:\/\/szeged.mae.ro\/"
        },
        {
            "id": 117,
            "city": "Taskent",
            "address": "Str. Zanjirbog (fosta Rejametov) nr. 44 A, Taskent",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+998 71 2526888",
            "url": "http:\/\/taskent.mae.ro\/"
        },
        {
            "id": 118,
            "city": "Tbilisi",
            "address": "Str. Lvovi, nr.7, cartier Saburtalo, Tbilisi, Georgia ",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+995 32 238 2310",
            "url": "http:\/\/tbilisi.mae.ro\/"
        },
        {
            "id": 119,
            "city": "Teheran",
            "address": "22 Shahid Meshki (Fakhrabad), Ave. Baharestan, Teheran",
            "email": "teheran@mae.ro",
            "phone": "0098-21-7753.90.41",
            "url": "http:\/\/teheran.mae.ro\/"
        },
        {
            "id": 120,
            "city": "Tel Aviv",
            "address": "Paz Tower 2, Str. Shoham, Nr. 2, Et. 8, Ramat Gan, 52510",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+972 3 5290613",
            "url": "http:\/\/telaviv.mae.ro\/"
        },
        {
            "id": 121,
            "city": "Tirana",
            "address": "Rruga Pandeli Evangjeli nr. 15, Tirana",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+355 4 230 31 33",
            "url": "http:\/\/tirana.mae.ro\/"
        },
        {
            "id": 122,
            "city": "Tokyo",
            "address": "3-16-19, Nishi-Azabu, Minato-ku, Tokyo-to, 106-0031",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+81 (0)3 3479 1804",
            "url": "http:\/\/tokyo.mae.ro\/"
        },
        {
            "id": 123,
            "city": "Torino",
            "address": "Via Ancona n.7, 10152 Torino",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+39 011 2495775",
            "url": "http:\/\/torino.mae.ro\/"
        },
        {
            "id": 124,
            "city": "Toronto",
            "address": "789 Don Mills Road, Unit 501 M3C1T9, Toronto, ON",
            "email": "toronto.consul@mae.ro",
            "phone": "+1 416 585 5802",
            "url": "http:\/\/toronto.mae.ro\/"
        },
        {
            "id": 125,
            "city": "Trieste",
            "address": "Via Udine, nr.11,34132 Trieste",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+39 040 411 652",
            "url": "http:\/\/trieste.mae.ro\/"
        },
        {
            "id": 126,
            "city": "Tripoli",
            "address": "Ali Bin Talib Street, Ben Ashour Area, P.O. Box: 5085 ",
            "email": "tripoli@mae.ro",
            "phone": "+ 218-21-361.52.95",
            "url": "http:\/\/tripoli.mae.ro\/"
        },
        {
            "id": 127,
            "city": "Tunis",
            "address": "4, Rue Essaheb Ibn Abbad, Cite Jardins, B.P.57-1004 Tunis",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+216 71 846 565",
            "url": "http:\/\/tunis.mae.ro\/"
        },
        {
            "id": 128,
            "city": "Ungheni",
            "address": "Strada Mihai Eminescu, nr.35, Ungheni",
            "email": "consul@bungheni.mdl.net",
            "phone": "+373 236 80001",
            "url": "http:\/\/balti.mae.ro"
        },
        {
            "id": 129,
            "city": "Vancouver",
            "address": "Suite 855, 555 Burrard Street, Two Bental Centre",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+1 604 633 0986",
            "url": "http:\/\/vancouver.mae.ro\/"
        },
        {
            "id": 130,
            "city": "Varșovia",
            "address": "Ul. Fr.Chopina 10, 00-559 Warszawa",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+48 22 628 3156",
            "url": "http:\/\/varsovia.mae.ro\/"
        },
        {
            "id": 131,
            "city": "Vatican",
            "address": "Via Panama 92, 00198 Roma",
            "email": "ambrovatican@gmail.com",
            "phone": "0039-06-854.18.02",
            "url": "http:\/\/vatican.mae.ro"
        },
        {
            "id": 132,
            "city": "Vârșeț",
            "address": "Trg Zelene Pijace 3\/A Vârset 26300",
            "email": "consulat.varset@mae.ro",
            "phone": "+381 (0)13 831 099",
            "url": "http:\/\/varset.mae.ro\/"
        },
        {
            "id": 133,
            "city": "Viena",
            "address": "Theresianumgasse 25, 1040 Wien",
            "email": "contact@informatiiconsulare.ro",
            "phone": "0043-1-503.24.65",
            "url": "http:\/\/viena.mae.ro\/"
        },
        {
            "id": 134,
            "city": "Vilnius",
            "address": "6 Gaono St., Vilnius",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+370 (5) 2310552",
            "url": "http:\/\/vilnius.mae.ro\/"
        },
        {
            "id": 135,
            "city": "Washington",
            "address": "1607 23rd Street, NW Washington, D.C. 20008",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+1 (202) 332-2392",
            "url": "http:\/\/washington.mae.ro\/"
        },
        {
            "id": 136,
            "city": "Zagreb",
            "address": "Strada Mlinarska nr. 43, 10000 - Zagreb",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+385 1 4677660",
            "url": "http:\/\/zagreb.mae.ro\/"
        },
        {
            "id": 137,
            "city": "Zaječar",
            "address": "Strada Kumanovska nr. 45, 19000 Zajecar, Serbia",
            "email": "zajecar.cons@mae.ro",
            "phone": "+381 19 432334",
            "url": ""
        },
        {
            "id": 138,
            "city": "Zaragoza",
            "address": "Calle Camino de Las Torres nr. 24, 50008 Zaragoza",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+34 976 48 14 29",
            "url": "http:\/\/zaragoza.mae.ro\/"
        },
        {
            "id": 139,
            "city": "Solotvino",
            "address": "Strada Sportivna nr.112, 90575 Solotvino ",
            "email": "contact@informatiiconsulare.ro",
            "phone": "380313456027",
            "url": "http:\/\/solotvino.mae.ro"
        },
        {
            "id": 140,
            "city": "Test Los Angeles",
            "address": "11766 Wilshire Blvd. Suite 200, Los Angelea, CA 90025",
            "email": "contact@informatiiconsulare.ro",
            "phone": "001 310-444-0043",
            "url": "http:\/\/losangeles.mae.ro"
        },
        {
            "id": 141,
            "city": "Bari",
            "address": "Via Bruno Zaccaro, nr. 17-19",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+39 080 546 1818",
            "url": "http:\/\/bari.mae.ro"
        },
        {
            "id": 142,
            "city": "Tallinn",
            "address": "str. Ravala nr. 5 et. 5, Tallinn",
            "email": "tallinn@mae.ro",
            "phone": "003727151610\/7151611",
            "url": "http:\/\/tallinn.mae.ro"
        },
        {
            "id": 143,
            "city": "Miami",
            "address": "1101 Brickell Ave, suite N600, Miami, FL 33131",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+1 305 763 8880",
            "url": "http:\/\/miami.mae.ro"
        },
        {
            "id": 144,
            "city": "Melbourne",
            "address": "448 St. Kilda Road, Etaj 5, Birou 5.05-5.06, 3004 VIC, Melbourne",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+61 3 99783804, +61 3 99783806, +61 3 99783805",
            "url": "http:\/\/canberra.mae.ro"
        },
        {
            "id": 145,
            "city": "Manchester",
            "address": "9Cooper Street, Manchester, M2 2FW",
            "email": "contact@informatiiconsulare.ro",
            "phone": "441612360478",
            "url": "http:\/\/manchester.mae.ro"
        },
        {
            "id": 146,
            "city": "Muscat",
            "address": "Villa 2990, Strada 2840, Shatti Al-Qurum, PO Box 161, Bareeq Al-Shati, CP 103, Muscat, Sultanatul Oman",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+968 24953871",
            "url": "http:\/\/muscat.mae.ro\/"
        },
        {
            "id": 147,
            "city": "Haifa",
            "address": "Haifa, Str. Habankim, Nr. 3, CP 33261",
            "email": "contact@informatiiconsulare.ro",
            "phone": "972747408931",
            "url": "http:\/\/haifa.mae.ro"
        },
        {
            "id": 148,
            "city": "Stuttgart",
            "address": "Hauptstätter Str. 70, 70178, Stuttgart",
            "email": "contact@informatiiconsulare.ro",
            "phone": "+49 711 6648611",
            "url": "http:\/\/stuttgart.mae.ro"
        },
        {
            "id": 149,
            "city": "gasdasgd",
            "address": "asdgas",
            "email": "a@a.a",
            "phone": "sdgasdg",
            "url": "http:\/\/a.a"
        }
    ]
}
```

### HTTP Request
`GET api/v1/diplomatic-missions`


<!-- END_76699d681f38e3c235a53f2380b5e53a -->

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
            "type": "Asociație\/Fundație",
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
            "type": "Asociație\/Fundație",
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
            "type": "Asociație\/Fundație",
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
            "type": "Asociație\/Fundație",
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
                    "builtin": true
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
            "type": "Asociație\/Fundație",
            "categories": [
                {
                    "id": 8,
                    "name": "Recusandae ratione qui aliquid ratione et quo nostrum.",
                    "builtin": false
                },
                {
                    "id": 9,
                    "name": "Omnis beatae accusamus harum nihil aspernatur sed.",
                    "builtin": true
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
            "name": "Grup informal"
        },
        {
            "id": 2,
            "name": "Asociație\/Fundație"
        },
        {
            "id": 3,
            "name": "Biserică"
        }
    ]
}
```

### HTTP Request
`GET api/v1/types`


<!-- END_c8c46f79ea22771862059c1f7bcb0e64 -->


