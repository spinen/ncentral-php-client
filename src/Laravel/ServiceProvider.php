<?php

namespace Spinen\Ncentral\Laravel;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Spinen\Ncentral\NcentralClient;

/**
 * Class NcentralProvider
 *
 * @package Spinen\Ncentral\Laravel
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
        $this->registerNcentralClient();

        $this->app->alias(NcentralClient::class, 'ncentral');
    }

    /**
     * Register the NcentralClient object
     *
     * A NcentralClient needs to have some properties set, so in Laravel, we are going to pull them from the configs.
     */
    protected function registerNcentralClient()
    {
        $this->app->singleton(
            NcentralClient::class,
            function (Application $app) {
                return new NcentralClient();
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
            NcentralClient::class,
        ];
    }
}
