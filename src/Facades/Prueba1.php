<?php

namespace Prueba\Prueba1\Facades;

use Illuminate\Support\Facades\Facade;

class Prueba1 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'prueba1';
    }
}