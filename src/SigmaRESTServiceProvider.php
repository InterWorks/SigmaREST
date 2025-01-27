<?php

namespace InterWorks\SigmaREST;

use Illuminate\Support\ServiceProvider;

class SigmaRESTServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->registerConfig();
    }

    /**
     * Merges the configuration file with the application's configuration.
     */
    public function registerConfig(): void
    {
        $config = __DIR__ . '/../config/sigmarest.php';

        $this->publishes([$config => config_path('sigmarest.php')]);

        $this->mergeConfigFrom($config, 'sigmarest');
    }
}
