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
$router->get('/api/usuarios', 'UsuariosController@getAll');

$router->group(['prefix' =>'/api/usuario'], function() use ($router){
    $router->get('/{id}', 'UsuariosController@get');
    $router->post('/', 'UsuariosController@store');
    $router->put('/{id}', 'UsuariosController@update');
    $router->delete('/{id}', 'UsuariosController@destroy');
    
});

?>