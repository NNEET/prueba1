<?php

namespace Prueba\Prueba1;

//use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

//use Prueba\Prueba1\Facades\Prueba1;

class Prueba1ServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        $this->loadRoutesFrom($this->basePath('routes/web.php'));
        $this->loadViewsFrom(
            $this->basePath('resources/views/'),
            'Prueba1');

        $this->loadMigrationsFrom(
            $this->basePath('database/migrations'));

        $this->loadTranslationsFrom(
            $this->basePath('resources/lang'),
            'Prueba1');

        $this->loadJsonTranslationsFrom(
            $this->basePath('resources/lang/json')
        );

        $this->publishes([
            $this->basePath('resources/lang/') => resource_path('lang/vendor/prueba1')
        ], 'prueba1-translations');

        $this->publishes([
            $this->basePath('resources/views/') => resource_path('views/vendor/prueba1')
        ], 'prueba1-views');

        $this->publishes([
            $this->basePath('config/prueba1.php') => base_path('config/prueba1.php')
        ], 'prueba1-config');

        $this->publishes([
            $this->basePath('database/migrations/') => database_path('migrations')
        ], 'prueba1-migrations');

        $this->publishes([
            $this->basePath('resources/static') => public_path('vendor/prueba1')
        ], 'prueba1-static-assets');
    }

    public function register()
    {
        $this->app->bind('prueba1', function () {
            return new Hello;
        });

        $this->mergeConfigFrom(
            $this->basePath('config/prueba1.php'),
            'prueba1');
    }

    protected function basePath($path = '')
    {
        return __DIR__ . '/../' . $path;
    }
}