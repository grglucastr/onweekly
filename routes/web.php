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


    $router->group(['prefix' => 'types'], function() use ($router) {
        $router->delete('/{id}', ['uses' => 'TypeController@deleteType']);
        $router->get('/', ['uses' => 'TypeController@showAllTypes']);
        $router->get('/{id}', ['uses' => 'TypeController@showOneType']);
        $router->post('/', ['uses' => 'TypeController@addType']);
        $router->put('/{id}', ['uses' => 'TypeController@updateType']);        
    });

    $router->group(['prefix' => 'requesters'], function() use($router){
        $router->get('/', ['uses' => 'RequesterController@showAllRequesters']);
        $router->get('/{id}', ['uses' => 'RequesterController@showOneRequester']);
        $router->post('/', ['uses' => 'RequesterController@addRequester']);
    });
    

    $router->group(['prefix' => 'technicians'], function() use ($router){
        $router->get('/', ['uses' => 'TechnicianController@showAllTechnicians']);
        $router->get('/{id}', ['uses' => 'TechnicianController@showOneTechnician']);
        $router->post('/', ['uses' => 'TechnicianController@addTechnician']);
        $router->delete('/{id}', ['uses' => 'TechnicianController@deleteTechnician']);
    });

});