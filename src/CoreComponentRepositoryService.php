<?php

namespace Padam\CoreComponentRepository;

use Illuminate\Support\ServiceProvider;

class CoreComponentRepositoryService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('core-component-repository.php'),
            ], 'config');

           
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'core-component-repository');

        // Register the main class to use with the facade
        $this->app->singleton('core-component-repository', function () {
            return new CoreComponentRepository;
        });
    }
}
