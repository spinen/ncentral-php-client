<?php

namespace Spinen\Nable\Ncentral\Laravel;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Spinen\SolarWindsMsp\Api\Client;

/**
 * Class SolarWindsMspProvider
 *
 * @package Spinen\SolarWindsMsp\Laravel
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerClient();

        $this->app->alias(Client::class, 'solarwindsmsp');
    }

    /**
     * Register the client object
     *
     * A Client needs to have some properties set, so in Laravel, we are going to pull them from the configs.
     */
    protected function registerClient()
    {
        $this->app->singleton(
            Client::class,
            function (Application $app) {
                return new Client();
            }
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            Client::class,
        ];
    }
}
