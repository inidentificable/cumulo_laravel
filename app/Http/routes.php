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

    //Inicio - A diferencia del inicio tradicional de Laravel, obligo al usuario a logearse.
    Route::get('/', [
        'middleware' => 'auth',
        'uses' => 'HomeController@index']);

    //Login usuario (Autogenerado Artisan)
    Route::get('/home', [
        'middleware' => 'auth',
        'uses' => 'HomeController@index']);
    Route::auth();
    
    //Login roles (03-12-2016 creyes)
    Route::get('/home_emprendedor', [
        'middleware' => 'auth',
        'uses' => 'HomeController@indexEmprendedor']);
    Route::get('/home_empresario', [
        'middleware' => 'auth',
        'uses' => 'HomeController@indexEmpresario']);
    Route::get('/home_inversionista', [
        'middleware' => 'auth',
        'uses' => 'HomeController@indexInversionista']);
    Route::get('/home_incubadora', [
        'middleware' => 'auth',
        'uses' => 'HomeController@indexIncubadora']);
    Route::get('/home_interno', [
        'middleware' => 'auth',
        'uses' => 'HomeController@indexInterno']);

    //Mantenedor de empresas
    route::get('empresas', [
        'middleware' => 'auth',
        'uses' => 'EmpresaController@index']);
    route::get('empresas/invitar', [
        'middleware' => 'auth',
        'uses' => 'EmpresaController@invitarEmpresas']);
    route::get('empresas/crear', [
        'middleware' => 'auth',
        'uses' => 'EmpresaController@create']);
    route::post('empresas/crear', [
        'middleware' => 'auth',
        'uses' => 'EmpresaController@store']);
    route::get('empresas/{id}', [
        'middleware' => 'auth',
        'uses' => 'EmpresaController@show']);
    route::get('empresas/invitados/{id}', [
        'middleware' => 'auth',
        'uses' => 'EmpresaController@obtenerInvitados']);
    route::get('misempresas', [
        'middleware' => 'auth',
        'uses' => 'UserController@listarMisEmpresas']);

    //Mantenedor de productos
    route::get('productos', [
        'middleware' => 'auth',
        'uses' => 'ProductoController@index']);
    route::get('productos/crear', [
        'middleware' => 'auth',
        'uses' => 'ProductoController@create']);
    route::post('productos/crear', [
        'middleware' => 'auth',
        'uses' => 'ProductoController@store']);
    route::get('productos/{id}', [
        'middleware' => 'auth',
        'uses' => 'ProductoController@show']);

    //Mantenedor de estados
    route::get('estados', [
        'middleware' => 'auth',
        'uses' => 'EstadoController@index']);
    route::get('estados/crear', [
        'middleware' => 'auth',
        'uses' => 'EstadoController@create']);
    route::post('estados/crear', [
        'middleware' => 'auth',
        'uses' => 'EstadoController@store']);
    route::get('estados/{id}', [
        'middleware' => 'auth',
        'uses' => 'EstadoController@show']);

    //Mantenedor de grupos
    route::get('grupos', [
        'middleware' => 'auth',
        'uses' => 'GrupoController@index']);
    route::get('grupos/crear', [
        'middleware' => 'auth',
        'uses' => 'GrupoController@create']);
    route::post('grupos/crear', [
        'middleware' => 'auth',
        'uses' => 'GrupoController@store']);
    route::get('grupos/{id}', [
        'middleware' => 'auth',
        'uses' => 'GrupoController@show']);
    route::get('gruposempresa/{empresaId}', [
        'middleware' => 'auth',
        'uses' => 'EmpresaController@listarGruposEmpresa']);
    route::get('misgrupos', [
        'middleware' => 'auth',
        'uses' => 'UserController@listarMisGrupos']);

    //Mantenedor de licitaciones
    route::get('licitaciones', [
        'middleware' => 'auth',
        'uses' => 'LicitacionController@index']);
    route::get('licitaciones/crear', [
        'middleware' => 'auth',
        'uses' => 'LicitacionController@create']);
    route::post('licitaciones/crear', [
        'middleware' => 'auth',
        'uses' => 'LicitacionController@store']);
    route::get('licitaciones/{id}', [
        'middleware' => 'auth',
        'uses' => 'LicitacionController@show']);

    //Mantenedor de ofertas
    route::get('ofertas', [
        'middleware' => 'auth',
        'uses' => 'OfertaController@index']);
    route::get('ofertas/crear', [
        'middleware' => 'auth',
        'uses' => 'OfertaController@create']);
    route::post('ofertas/crear', [
        'middleware' => 'auth',
        'uses' => 'OfertaController@store']);
    route::get('ofertas/{id}', [
        'middleware' => 'auth',
        'uses' => 'OfertaController@show']);

    //Mantenedor de permisos
    route::get('permisos', [
        'middleware' => 'auth',
        'uses' => 'PermisoController@index']);
    route::get('permisos/crear', [
        'middleware' => 'auth',
        'uses' => 'PermisoController@create']);
    route::post('permisos/crear', [
        'middleware' => 'auth',
        'uses' => 'PermisoController@store']);
    route::get('permisos/{id}', [
        'middleware' => 'auth',
        'uses' => 'PermisoController@show']);

    //Mantenedor de proyecto
    route::get('proyectos', [
        'middleware' => 'auth',
        'uses' => 'ProyectoController@index']);
    route::get('proyectos/crear', [
        'middleware' => 'auth',
        'uses' => 'ProyectoController@create']);
    route::post('proyectos/crear', [
        'middleware' => 'auth',
        'uses' => 'ProyectoController@store']);
    route::get('proyectos/{id}', [
        'middleware' => 'auth',
        'uses' => 'ProyectoController@show']);
    
    //Mantenedor de actividad
    route::get('actividades', [
        'middleware' => 'auth',
        'uses' => 'ActividadController@index']);
    route::get('actividades/crear', [
        'middleware' => 'auth',
        'uses' => 'ActividadController@create']);
    route::post('actividades/crear', [
        'middleware' => 'auth',
        'uses' => 'ActividadController@store']);
    route::get('actividades/{id}', [
        'middleware' => 'auth',
        'uses' => 'ActividadController@show']);
});


