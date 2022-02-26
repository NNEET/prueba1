<?php

namespace Prueba\Prueba1\Tests;

use Prueba\Prueba1\Facades\Prueba1;
use Prueba\Prueba1\Prueba1ServiceProvider;
use Prueba\Prueba1\RouteServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connection.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
        ]);
    }

//    protected function getEnvironmentSetUp($app)
//    {
//        $app['config']->set('database.connections.testing', [
//            'driver' => 'sqlite',
//            'database' => ':memory:',
//            'prefix' => '',
//        ]);
//    }

    protected function getPackageProviders($app)
    {
        return [
            Prueba1ServiceProvider::class,
            RouteServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'prueba1' => Prueba1::class
        ];
    }
}