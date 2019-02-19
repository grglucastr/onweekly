<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function() use ($router){

    $router->group(['prefix' => 'status'], function() use($router){
        $router->get('/', ['uses' => 'StatusController@showAllStatus']);
        $router->post('/', ['uses' => 'StatusController@addStatus']);
        $router->get('/{id}', ['uses' => 'StatusController@showOneStatus']);
        $router->put('/{id}', ['uses' => 'StatusController@updateStatus']);
        $router->delete('/{id}', ['uses' => 'StatusController@deleteStatus']);
    });

});