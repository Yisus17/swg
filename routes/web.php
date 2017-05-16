<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
/*Rutas de la aplicacion */

/**
 * Manipulacion
*/

Route::group(['namespace' => 'Manipulacion'], function () {

    //Rutas de Usuario
    Route::any('usuario/data',[
        'as' => 'usuario.data',
        'uses'=> 'UsuarioController@data'
    ]);

    Route::resource('usuario','UsuarioController');

//Rutas de Perfil
    Route::resource('usuario.perfil','PerfilController',['only' => ['index']]);
    Route::post('usuario/{usuario}/perfil',[
        'as' => 'usuario.perfil.guardar',
        'uses'=> 'PerfilController@guardar'
    ]);

    //Canal
    Route::any('canal/ajax',[
        'as' => 'canal.ajax',
        'uses'=> 'CanalController@ajax'
    ]);

    Route::any('canal/data',[
        'as' => 'canal.data',
        'uses'=> 'CanalController@data'
    ]);

    Route::resource('canal','CanalController');

    //subCanal
    Route::any('subcanal/ajax',[
        'as' => 'subcanal.ajax',
        'uses'=> 'SubCanalController@ajax'
    ]);

    Route::any('subcanal/data',[
        'as' => 'subcanal.data',
        'uses'=> 'SubCanalController@data'
    ]);

    Route::resource('subcanal','SubCanalController');


    //Categoria
    Route::any('categoria/ajax',[
        'as' => 'categoria.ajax',
        'uses'=> 'CategoriaController@ajax'
    ]);

    Route::any('categoria/data',[
        'as' => 'categoria.data',
        'uses'=> 'CategoriaController@data'
    ]);

    Route::resource('categoria','CategoriaController');

    //SubCategoria
    Route::any('subcategoria/ajax',[
        'as' => 'subcategoria.ajax',
        'uses'=> 'SubcategoriaController@ajax'
    ]);

    Route::any('subcategoria/data',[
        'as' => 'subcategoria.data',
        'uses'=> 'SubcategoriaController@data'
    ]);

    Route::resource('subcategoria','SubcategoriaController');

    //Tipo
    Route::any('tipo/ajax',[
        'as' => 'tipo.ajax',
        'uses'=> 'TipoController@ajax'
    ]);

    Route::any('tipo/data',[
        'as' => 'tipo.data',
        'uses'=> 'TipoController@data'
    ]);

    Route::resource('tipo','TipoController');

    //SubTipo
    Route::any('subtipo/ajax',[
        'as' => 'subtipo.ajax',
        'uses'=> 'SubtipoController@ajax'
    ]);

    Route::any('subtipo/data',[
        'as' => 'subtipo.data',
        'uses'=> 'SubtipoController@data'
    ]);

    Route::resource('subtipo','SubtipoController');

    //Colaborador


    Route::any('colaborador/data',[
        'as' => 'colaborador.data',
        'uses'=> 'ColaboradorController@data'
    ]);

    Route::resource('colaborador','ColaboradorController');

    //Clientes
    Route::any('cliente/data',[
        'as' => 'cliente.data',
        'uses'=> 'ClienteController@data'
    ]);
    Route::resource('cliente','ClienteController');


    //Indicadores
    Route::any('indicador/ajax',[
        'as' => 'indicador.ajax',
        'uses'=> 'IndicadorController@ajax'
    ]);
    Route::any('indicador/data',[
        'as' => 'indicador.data',
        'uses'=> 'IndicadorController@data'
    ]);
    Route::resource('indicador','IndicadorController');
});


/** Calendario **/


Route::get('/calendario','CalendarController@index');
Route::get('/calendario/eventos/','CalendarController@eventos');

Route::post('/vcliente/ajax','VClienteController@ajax');
Route::get('/vcliente/{id_cliente}','VClienteController@index');
Route::get('/vcliente/{id_cliente}/{id_categoria}','VClienteController@marca');
