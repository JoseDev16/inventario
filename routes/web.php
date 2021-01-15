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
use Illuminate\Routing\Route;


$router->get('/', function () use ($router) {
    return $router->app->version();
});

//$router->group(['middleware' => 'a], function () use ($router){
    //Rutas de producto
    $router->get('Producto',['as' => 'producto.index', 'uses' => 'ProductoController@index' ]);
    $router->get('Producto/{id}',['as' => 'producto.show', 'uses' => 'ProductoController@show' ]);
    $router->post('Producto',['as' => 'producto.store', 'uses' => 'ProductoController@create' ]);
    $router->put('Producto/{id}',['as' => 'producto.update', 'uses' => 'ProductoController@update' ]);
    $router->delete('Producto/{id}',['as' => 'producto.delete', 'uses' => 'ProductoController@delete' ]);
    $router->get('Producto/{id}',['as' => 'producto.edit_view', 'uses' => 'ProductoController@edit_view' ]);
    $router->post('Producto/Bodega',['as' => 'producto.bodega', 'uses' => 'ProductoController@bodega' ]);
    
    //Rutas usuario

    $router->get('Usuario',['as' => 'usuario.index', 'uses' => 'UserController@index' ]);
    $router->get('Usuario/{id}',['as' => 'usuario.edit_view', 'uses' => 'UserController@edit_view' ]);
    $router->post('Usuario',['as' => 'usuario.store', 'uses' => 'UserController@store' ]);
    $router->post('Usuario/destroy',['as' => 'usuario.destroy', 'uses' => 'UserController@destroy' ]);

    //Ruta bodegas (venta)
    $router->get('Bodega',['as' => 'bodega.index', 'uses' => 'BodegaController@index' ]);



    




//});
