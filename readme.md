# SPINEN's PHP Client for N-able's N-Central

[![Latest Stable Version](https://poser.pugx.org/spinen/ncentral-php-client/v/stable)](https://packagist.org/packages/spinen/ncentral-php-client)
[![Latest Unstable Version](https://poser.pugx.org/spinen/ncentral-php-client/v/unstable)](https://packagist.org/packages/spinen/ncentral-php-client)
[![Total Downloads](https://poser.pugx.org/spinen/ncentral-php-client/downloads)](https://packagist.org/packages/spinen/ncentral-php-client)
[![License](https://poser.pugx.org/spinen/ncentral-php-client/license)](https://packagist.org/packages/spinen/ncentral-php-client)

PHP Client for [N-able's N-Central](https://www.n-able.com/products/n-central).

We solely use [Laravel](http://www.laravel.com) for our applications, so there is some Laravel specific files that you can use if you are using this client in a Laravel application. We have tried to make sure that you can use the client outside of Laravel, and have some documentation about it below.

## Build Status

| Branch | Status | Coverage | Code Quality |
| ------ | :----: | :------: | :----------: |
| Develop | [![Build Status](https://github.com/spinen/ncentral-php-client/workflows/CI/badge.svg?branch=develop)](https://github.com/spinen/ncentral-php-client/workflows/CI/badge.svg?branch=develop) | [![Code Coverage](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/coverage.png?b=develop)](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/coverage.png?b=develop) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/?branch=develop) |
| Master | [![Build Status](https://github.com/spinen/ncentral-php-client/workflows/CI/badge.svg?branch=master)](https://github.com/spinen/ncentral-php-client/workflows/CI/badge.svg?branch=master) | [![Code Coverage](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/coverage.png?b=master) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/?branch=master) |

## Prerequisite

* [laminas/laminas-code](https://github.com/laminas/laminas-code) - ONLY if you want/need to use the wizard from [phpro/soap-client](https://github.com/phpro/soap-client) to regenerate the Client's class files.
* [nesbot/carbon](https://github.com/briannesbitt/Carbon)
* TODO: Add others here

## Install

Install Ncentral Client:

```bash
$ composer require spinen/ncentral-php-client
```

[Optional] Add the alias to ```config/app.php```

```php
'aliases' => [
    # other aliases omitted
    'Ncentral' => Spinen\Ncentral\Laravel\Facades\Ncentral::class,
],
```

## Configuration for Laravel

Add the following to ```config/services.php```...

```php
'ncentral' =>  [
    // TODO: Document vars here
],
```

Add the appropriate values to your ```.env```...

```bash
'NCENTRAL_WSDL_PATH' - Path to the Ncentral WSDL file or URL
```

## Usage

Set up a new `NcentralClient` using its factory...

```
$client = Spinen\Ncentral\NcentralClientFactory::factory(env('NCENTRAL_WSDL_PATH'));
```

## Non-Laravel Usage

To use the client outside of Laravel, you just need to new-up the objects...

```
// TODO: Document usages here
```
