<?php

namespace Prueba\Prueba1\Http\Controllers;

use Prueba\Prueba1\Facades\Prueba1;

class HelloController
{
    public function index()
    {
       // return Prueba1::hello();
        return view('Prueba1::home', [
            'message'=>Prueba1::hello()
        ]);
    }
}