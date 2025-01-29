<?php

namespace InterWorks\SigmaREST\Tests;

use Illuminate\Contracts\Config\Repository;
use InterWorks\SigmaREST\SigmaRESTServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function defineEnvironment($app)
    {
        // Setup default database to use sqlite :memory:
        tap($app['config'], function (Repository $config) {
            $config->set('sigmarest.url', 'https://example.sigma.com');
            $config->set('sigmarest.client-id', 'client-id');
            $config->set('sigmarest.client-secret', 'client-secret');
        });
    }

    protected function getPackageProviders($app)
    {
        return [
            SigmaRESTServiceProvider::class,
        ];
    }
}
