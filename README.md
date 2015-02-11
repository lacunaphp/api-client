LacunaPHP API Client
====================

[![Build Status](https://travis-ci.org/lacunaphp/api-client.svg?branch=master)](https://travis-ci.org/lacunaphp/api-client)


### Installing via Composer

The recommended method of installation is through [Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

```bash
composer require lacunaphp/api-client
```

```json
{
	"require": {
		"lacunaphp/api-client": "~0.1"
	}
}
```



### Usage

```php
require_once('vendor/autoload.php');

use LacunaPHP\APIClient\Client;

$client = new Client('https://us1.lacunaexpanse.com');

try {
	$result = $client->empire->login([
		'name'     => 'empire-name',
		'password' => 'empire-password',
		'api_key'  => 'anonymous'
	]);
} catch($error) {
	...
}

```
