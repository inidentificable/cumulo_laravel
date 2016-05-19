<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //Login usuario (Autogenerado Artisan)
    Route::get('/home', 'HomeController@index');
    Route::auth();

    //Mantenedor de empresas
    route::get('empresas', 'EmpresaController@index');
    route::get('empresas/crear', 'EmpresaController@create');
    route::post('empresas/crear', 'EmpresaController@store');
    route::get('empresas/{id}', 'EmpresaController@show');

    //Mantenedor de estados
    route::get('estados', 'EstadoController@index');
    route::get('estados/crear', 'EstadoController@create');
    route::post('estados/crear', 'EstadoController@store');
    route::get('estados/{id}', 'EstadoController@show');

    //Mantenedor de grupos
    route::get('grupos', 'GrupoController@index');
    route::get('grupos/crear', 'GrupoController@create');
    route::post('grupos/crear', 'GrupoController@store');
    route::get('grupos/{id}', 'GrupoController@show');

    //Mantenedor de licitaciones
    route::get('licitaciones', 'LicitacionController@index');
    route::get('licitaciones/crear', 'LicitacionController@create');
    route::post('licitaciones/crear', 'LicitacionController@store');
    route::get('licitaciones/{id}', 'LicitacionController@show');

    //Mantenedor de ofertas
    route::get('ofertas', 'OfertaController@index');
    route::get('ofertas/crear', 'OfertaController@create');
    route::post('ofertas/crear', 'OfertaController@store');
    route::get('ofertas/{id}', 'OfertaController@show');

    //Mantenedor de permisos
    route::get('permisos', 'PermisoController@index');
    route::get('permisos/crear', 'PermisoController@create');
    route::post('permisos/crear', 'PermisoController@store');
    route::get('permisos/{id}', 'PermisoController@show');

    //Mantenedor de proyecto
    route::get('proyectos', 'ProyectoController@index');
    route::get('proyectos/crear', 'ProyectoController@create');
    route::post('proyectos/crear', 'ProyectoController@store');
    route::get('proyectos/{id}', 'ProyectoController@show');
});


