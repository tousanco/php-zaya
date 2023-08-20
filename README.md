# Zaya link shortener sdk for PHP
using this package you can easily implement the zaya.io link shortener in your php application
## Installation

You can install the package via composer:
```bash
composer require tousanco/php-zaya
```

## Usage
First you need to get your API key from [Zaya](https://zaya.io/developers/api)
### Links
```php
use Tousanco\PhpZaya\Link;
use GuzzleHttp\Client;

$apiKey = 'your api key';

// available methods: list, create, details, update, delete.
$links = Link::instance($apiKey)->list();
// OR
$client = new Client();
$links = (new Link($client, $apiKey))->list();
```
### Spaces
```php
use Tousanco\PhpZaya\Space;
use GuzzleHttp\Client;

$apiKey = 'your api key';

// available methods: list, create, details, update, delete.
$spaces = Space::instance($apiKey)->list();
// OR
$client = new Client();
$spaces = (new Space($client, $apiKey))->list();
```
### Domains
```php
use Tousanco\PhpZaya\Domain;
use GuzzleHttp\Client;

$apiKey = 'your api key';

// available methods: list, create, details, update, delete.
$domains = Domain::instance($apiKey)->list();
// OR
$client = new Client();
$domains = (new Domain($client, $apiKey))->list();
```
### Account
```php
use Tousanco\PhpZaya\Account;
use GuzzleHttp\Client;

$apiKey = 'your api key';

$accountDetails = Account::instance($apiKey)->details();
// OR
$client = new Client();
$accountDetails = (new Account($client, $apiKey))->details();
```
### Stats
```php
use Tousanco\PhpZaya\Stats;
use GuzzleHttp\Client;

$apiKey = 'your api key';

// available methods: total, clicks, referrers, countries, languages, browsers, devices, operatingSystems
$stats = Stats::instance($apiKey)->total();
// OR
$client = new Client();
$stats = (new Stats($client, $apiKey))->total();
```