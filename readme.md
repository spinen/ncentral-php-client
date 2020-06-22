# SPINEN's SolarWindsMSP PHP Client

[![Latest Stable Version](https://poser.pugx.org/spinen/solarwindsmsp-php-client/v/stable)](https://packagist.org/packages/spinen/solarwindsmsp-php-client)
[![Total Downloads](https://poser.pugx.org/spinen/solarwindsmsp-php-client/downloads)](https://packagist.org/packages/spinen/solarwindsmsp-php-client)
[![Latest Unstable Version](https://poser.pugx.org/spinen/solarwindsmsp-php-client/v/unstable)](https://packagist.org/packages/spinen/solarwindsmsp-php-client)
[![Dependency Status](https://www.versioneye.com/php/spinen:solarwindsmsp-php-client/badge.svg)](https://www.versioneye.com/php/spinen:solarwindsmsp-php-client)
[![License](https://poser.pugx.org/spinen/solarwindsmsp-php-client/license)](https://packagist.org/packages/spinen/solarwindsmsp-php-client)

PHP client for the SolarWindsMSP APIs.

We solely use [Laravel](http://www.laravel.com) for our applications, so there is some Laravel specific files that you can use if you are using this client in a Laravel application. We have tried to make sure that you can use the client outside of Laravel, and have some documentation about it below.

## Build Status

| Branch | Status | Coverage | Code Quality |
| ------ | :----: | :------: | :----------: |
| Develop | [![Build Status](https://github.com/spinen/solarwindsmsp-php-client/workflows/CI/badge.svg?branch=develop)](https://github.com/spinen/solarwindsmsp-php-client/workflows/CI/badge.svg?branch=develop) | [![Coverage Status](https://scrutinizer-ci.com/g/spinen/solarwindsmsp-php-client/badges/coverage.png?b=develop)](https://scrutinizer-ci.com/g/spinen/solarwindsmsp-php-client/badges/coverage.png?b=develop) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/solarwindsmsp-php-client/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/spinen/solarwindsmsp-php-client/?branch=develop) |
| Master | [![Build Status](https://github.com/spinen/solarwindsmsp-php-client/workflows/CI/badge.svg?branch=master)](https://github.com/spinen/solarwindsmsp-php-client/workflows/CI/badge.svg?branch=master) | [![Coverage Status](https://scrutinizer-ci.com/g/spinen/solarwindsmsp-php-client/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/spinen/solarwindsmsp-php-client/badges/coverage.png?b=master) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/solarwindsmsp-php-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/spinen/solarwindsmsp-php-client/?branch=master) |

## Prerequisite

* TODO: Add others here
* [nesbot/carbon](https://github.com/briannesbitt/Carbon)

## Install

Install SolarWindsMSP Client:

```bash
    $ composer require spinen/solarwindsmsp-php-client
```

### For >= Laravel 5.5, you are done with the Install

The package uses the auto registration feature

### For < Laravel 5.5, you have to register the Service Provider

Add the provider to ```config/app.php```

```php
'providers' => [
    # other providers omitted
    Spinen\SolarWindsMsp\Laravel\ServiceProvider::class,
],
```

[Optional] Add the alias to ```config/app.php```

```php
'aliases' => [
    # other aliases omitted
    'SolarWindsMSP' => Spinen\SolarWindsMsp\Laravel\Facades\SolarWindsMsp::class,
],
```

## Configuration for Laravel

Add the following to ```config/services.php```...

```php
    'solarwindsmsp' =>  [
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
