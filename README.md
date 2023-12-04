# Zaya link shortener sdk for PHP
using this package you can easily implement the [Zaya](https://zaya.io) link shortener in your php application.
## Installation

You can install the package via composer:
```bash
composer require tousanco/php-zaya
```

## Usage
First you need to get your API key from [Zaya](https://zaya.io/developers/api)
### Instantiate
```php
use Tousanco\PhpZaya\Link;
use GuzzleHttp\Client;

$apiKey = 'your api key';

// available classes: Link, Space, Domain, Account, Stats.
$instance = Link::instance($apiKey);
// OR
$client = new Client();
$instance = (new Link($client, $apiKey));
```
### Links
```php
use Tousanco\PhpZaya\Link;

$instanceLink = Link::instance($apiKey);

$listParams = [
    // All options nullable
    
    // search (string)
    'search' => 'search key',
    // by (in:title,alias,url) null for all.
    'by' => 'title',
    // ids comma separated (string)
    'ids' => '1,2,3,4,5',
    // status (int|in:0,1,2,3,4,5,6)
    'status' => 1,
    // (int) space-id
    'space' => 1,
    // (int) domain-id
    'domain' => 1,
    // favorites (bool|in:1) null for false
    'favorites' => 1,
    // sort (string|in:desc,asc,max,min)
    'sort' => 'desc',
];
$links = $instanceLink->all($listParams);

$createOrUpdateParams = [
    // All options nullable
    'alias' => 'string',
    'password' => 'string',
    'space' => 'int',
    'domain' => 'int',
    'disabled' => 'int',
    'public' => 'int',
    'description' => 'string',
    'expiration_url' => 'url',
    'expiration_date' => 'Y-m-d',
    'expiration_time' => 'HH:MM',
    'expiration_clicks' => 'int',
];
$link = $instanceLink->create('https://example.com', $createOrUpdateParams);

$linkId = 1;
$link = $instanceLink->details($linkId);

$link = $instanceLink->update($linkId, $createOrUpdateParams);

$instanceLink->delete($linkId);
```
### Spaces
```php
use Tousanco\PhpZaya\Space;

$instanceSpace = Space::instance($apiKey);

$listParams = [
    // All options nullable
    'search' => 'string key',
    // sort (string|in:desc,asc)
    'sort' => 'desc',
];
$spaces = $instanceSpace->all($listParams);

$params = ['name' => 'sample space', 'color' => '#fff'];
$space = $instanceSpace->create($params);

$spaceId = 1;
$space = $instanceSpace->details($spaceId);

$space = $instanceSpace->update($spaceId, $params);

$instanceSpace->delete($spaceId);
```
### Domains
```php
use Tousanco\PhpZaya\Domain;

$instanceDomain = Domain::instance($apiKey);

$listParams = [
    // All options nullable
    'search' => 'string key',
    // sort (string|in:desc,asc)
    'sort' => 'desc',
];
$domains = $instanceDomain->all($listParams);

$params = [
    'name' => 'your-domain.com',
    // index_page and not_found_page nullable.
    'index_page' => 'url',
    'not_found_page' => 'url',
];
$domain = $instanceDomain->create($params);

$domainId = 1;
$domain = $instanceDomain->details($domainId);

// You cannot update the domain name
$domain = $instanceDomain->update($domainId, $params);

$instanceDomain->delete($domainId);
```
### Stats
```php
use Tousanco\PhpZaya\Stats;

$instanceStats = Stats::instance($apiKey);

$linkId = 1;
// The default value is the current day's
$params = ['from' => 'Y-m-d H:i:s', 'to' => 'Y-m-d H:i:s'];

$total = $instanceStats->total($linkId, $params);

$clicks = $instanceStats->clicks($linkId, $params);

$referrers = $instanceStats->referrers($linkId, $params);

$countries = $instanceStats->countries($linkId, $params);

$languages = $instanceStats->languages($linkId, $params);

$browsers = $instanceStats->browsers($linkId, $params);

$devices = $instanceStats->devices($linkId, $params);

$operatingSystems = $instanceStats->operatingSystems($linkId, $params);
```
### Account
```php
use Tousanco\PhpZaya\Account;

$accountInstance = Account::instance($apiKey);

$account = $accountInstance->details();
```
## Documentation
See the [documentation](https://zaya.io/developers) for more details.