<?php

namespace Prueba\Prueba1;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Prueba\Prueba1\Http\Controllers';

    public function map()
    {
        Route::namespace($this->namespace)
            ->group(__DIR__ . '/../routes/web.php');
    }
}