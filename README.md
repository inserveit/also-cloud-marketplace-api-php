## Requirements
[![PHP Version Require](http://poser.pugx.org/inserve/also-cloud-marketplace-api-php/require/php)](https://packagist.org/packages/inserve/also-cloud-marketplace-api-php)

## Installation
`composer require inserve/also-cloud-marketplace-api-php`

## Usage

```php
<?php

use Inserve\ALSOCloudMarketplaceAPI;

require 'vendor/autoload.php';

$api = new ALSOCloudMarketplaceAPI\MarketplaceAPIClient();

$api->authenticate('user', 'password');
$subscriptions = $api->subscriptions->get(12345);

```
