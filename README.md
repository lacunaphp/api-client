LacunaPHP API Client
====================




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
		"lacunaphp/api-client": "dev-master"
	}
}
```



### Usage

```php
require_once('vendor/autoload.php');

$uri = 'https://us1.lacunaexpanse.com';

$client = new LacunaPHP\APIClient($uri)

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
