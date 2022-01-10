<?php

namespace Spinen\Ncentral\Laravel;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Spinen\Ncentral\NcentralClient;
use Spinen\Ncentral\NcentralClientFactory;

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
        $this->registerNcentralClient();

        $this->registerPublishes();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias(NcentralClient::class, 'ncentral');

        $this->mergeConfigFrom(__DIR__ . '/../../config/clickup.php', 'clickup');
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
                return NcentralClientFactory::factory(env('NCENTRAL_WSDL_PATH'));
            }
        );
    }

    /**
     * There are several resources that get published
     *
     * Only worry about telling the application about them if running in the console.
     */
    protected function registerPublishes()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../../config/soap-client.php' => config_path('soap-client.php'),
                ],
                'soap-client'
            );
        }
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
