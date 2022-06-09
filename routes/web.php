<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

/**
 * Se puede hacer grupos para compartir la raiz de la URL, y crear alternativas
 * se suele poner la version y crear otro grupo
 */
$router->group(["prefix" => "/v1"], function () use ($router) {
    /**
     * Group de user
     */
    $router->group(["prefix" => "/user"], function () use ($router) {
        /**
         * Aqui se pone el metodo (POST, GET), su parte de url y que función utilizan
         */
        $router->post('/register', 'UserController@createUser');
        $router->get('/list', 'UserController@getListUser');
    });

    /**
     * Group de pass
     */
    $router->group(["prefix" => "/pass"], function () use ($router) {
        $router->get('/list', 'PassController@getListPass');
    });

    /**
     * Group de service
     */
    $router->group(["prefix" => "/service"], function () use ($router){
        $router->get('/list', 'ServiceController@getListService');
    });

    /**
     * Group de booking
     */
    $router->group(["prefix" => "/booking"], function () use ($router) {
        $router->post('/register', 'BookingController@createBooking');
        $router->get('/list', 'BookingController@getListBooking');
        $router->delete("/{id}", 'BookingController@deleteBooking');
    });
 });
