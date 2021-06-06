# SPINEN's PHP Client for N-able's N-Central

[![Latest Stable Version](https://poser.pugx.org/spinen/ncentral-php-client/v/stable)](https://packagist.org/packages/spinen/ncentral-php-client)
[![Total Downloads](https://poser.pugx.org/spinen/ncentral-php-client/downloads)](https://packagist.org/packages/spinen/ncentral-php-client)
[![Latest Unstable Version](https://poser.pugx.org/spinen/ncentral-php-client/v/unstable)](https://packagist.org/packages/spinen/ncentral-php-client)
[![Dependency Status](https://www.versioneye.com/php/spinen:ncentral-php-client/badge.svg)](https://www.versioneye.com/php/spinen:ncentral-php-client)
[![License](https://poser.pugx.org/spinen/ncentral-php-client/license)](https://packagist.org/packages/spinen/ncentral-php-client)

PHP Client for N-able's N-Central.

We solely use [Laravel](http://www.laravel.com) for our applications, so there is some Laravel specific files that you can use if you are using this client in a Laravel application. We have tried to make sure that you can use the client outside of Laravel, and have some documentation about it below.

## Build Status

| Branch | Status | Coverage | Code Quality |
| ------ | :----: | :------: | :----------: |
| Develop | [![Build Status](https://github.com/spinen/ncentral-php-client/workflows/CI/badge.svg?branch=develop)](https://github.com/spinen/ncentral-php-client/workflows/CI/badge.svg?branch=develop) | [![Coverage Status](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/coverage.png?b=develop)](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/coverage.png?b=develop) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/?branch=develop) |
| Master | [![Build Status](https://github.com/spinen/ncentral-php-client/workflows/CI/badge.svg?branch=master)](https://github.com/spinen/ncentral-php-client/workflows/CI/badge.svg?branch=master) | [![Coverage Status](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/coverage.png?b=master) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/spinen/ncentral-php-client/?branch=master) |

## Prerequisite

* TODO: Add others here
* [nesbot/carbon](https://github.com/briannesbitt/Carbon)

## Install

Install Ncentral Client:

```bash
    $ composer require spinen/ncentral-php-client
```

### For >= Laravel 5.5, you are done with the Install

The package uses the auto registration feature

### For < Laravel 5.5, you have to register the Service Provider

Add the provider to ```config/app.php```

```php
'providers' => [
    # other providers omitted
    Spinen\Nable\Ncentral\Laravel\ServiceProvider::class,
],
```

[Optional] Add the alias to ```config/app.php```

```php
'aliases' => [
    # other aliases omitted
    'Ncentral' => Spinen\Nable\Ncentral\Laravel\Facades\Ncentral::class,
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
// TODO: Document env vars here
```

## Usage

Here is an example of getting the system information...

```
// TODO: Document usage here
```

Same call using the facade...

```
// TODO: Document usage here
```

## Non-Laravel Usage

To use the client outside of Laravel, you just need to new-up the objects...

```
// TODO: Document usages here
```
