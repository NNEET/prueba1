<?php

use Illuminate\Support\Facades\Route;
use Prueba\Prueba1\Http\Controllers\HelloController;

//use Prueba\Prueba1\Http\Controllers\HelloController;

//use Prueba\Prueba1\Http\Controllers\{
//    HelloController,
//};

//Route::namespace('Prueba\Prueba1\Http\Controllers')->group(function () {
//    Route::get('hello-route', 'HelloController');
//});
//Route::get('hello-route', HelloController::class);


//Route::get('hello-route', 'HelloController@index');

Route::get(config('prueba1.route'), [HelloController::class, 'index']);
