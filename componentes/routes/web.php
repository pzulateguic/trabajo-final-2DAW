<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});

Route::get('/usuarios', function () {
    return view('usuarios.index');
});

//*Usuarios

Route::get('usuarios', ['as' => 'usuarios.index', 'uses' => 'App\Http\Controllers\UsuariosController@index']);
Route::get('usuarios/create', ['as' => 'usuarios.create', 'uses' => 'App\Http\Controllers\UsuariosController@create']);
Route::post('usuarios', ['as' => 'usuarios.store', 'uses' => 'App\Http\Controllers\UsuariosController@store']);
Route::get('usuarios/delete/{idusuario}', ['as' => 'usuarios.delete', 'uses' => 'App\Http\Controllers\UsuariosController@delete']);
Route::get('usuarios/edit/{idusuario}', ['as' => 'usuarios.edit', 'uses' => 'App\Http\Controllers\UsuariosController@edit']);
Route::get('usuarios/show/{idusuario}', ['as' => 'usuarios.show', 'uses' => 'App\Http\Controllers\UsuariosController@show']);
Route::post('storepass', ['as' => 'usuarios.storepass', 'uses' => 'App\Http\Controllers\UsuariosController@storepass']);

//*Clientes

Route::get('clientes', ['as' => 'clientes.index', 'uses' => 'App\Http\Controllers\ClientesController@index']);
Route::get('clientes/create', ['as' => 'clientes.create', 'uses' => 'App\Http\Controllers\ClientesController@create']);
Route::post('clientes', ['as' => 'clientes.store', 'uses' => 'App\Http\Controllers\ClientesController@store']);
Route::get('clientes/delete/{idusuario}', ['as' => 'clientes.delete', 'uses' => 'App\Http\Controllers\ClientesController@delete']);
Route::get('clientes/edit/{idusuario}', ['as' => 'clientes.edit', 'uses' => 'App\Http\Controllers\ClientesController@edit']);
Route::get('clientes/show/{idusuario}', ['as' => 'clientes.show', 'uses' => 'App\Http\Controllers\ClientesController@show']);

//*Aplicaciones
Route::get('aplicaciones', ['as' => 'aplicaciones.index', 'uses' => 'App\Http\Controllers\AplicacionesController@index']);
Route::get('aplicaciones/create', ['as' => 'aplicaciones.create', 'uses' => 'App\Http\Controllers\AplicacionesController@create']);
Route::post('aplicaciones', ['as' => 'aplicaciones.store', 'uses' => 'App\Http\Controllers\AplicacionesController@store']);
Route::get('aplicaciones/delete/{idusuario}', ['as' => 'aplicaciones.delete', 'uses' => 'App\Http\Controllers\AplicacionesController@delete']);
Route::get('aplicaciones/edit/{idusuario}', ['as' => 'aplicaciones.edit', 'uses' => 'App\Http\Controllers\AplicacionesController@edit']);
Route::get('aplicaciones/show/{idusuario}', ['as' => 'aplicaciones.show', 'uses' => 'App\Http\Controllers\AplicacionesController@show']);


Route::get('ajaxApp/{id}', ['as' => 'aplicaciones.ajaxApp', 'uses' => 'App\Http\Controllers\AplicacionesController@ajaxApp']);


//*Componentes
Route::get('componentes', ['as' => 'componentes.index', 'uses' => 'App\Http\Controllers\ComponentesController@index']);
Route::get('componentes/create', ['as' => 'componentes.create', 'uses' => 'App\Http\Controllers\ComponentesController@create']);
Route::post('componentes', ['as' => 'componentes.store', 'uses' => 'App\Http\Controllers\ComponentesController@store']);
Route::get('componentes/delete/{idusuario}', ['as' => 'componentes.delete', 'uses' => 'App\Http\Controllers\ComponentesController@delete']);
Route::get('componentes/edit/{idusuario}', ['as' => 'componentes.edit', 'uses' => 'App\Http\Controllers\ComponentesController@edit']);
Route::get('componentes/show/{idusuario}', ['as' => 'componentes.show', 'uses' => 'App\Http\Controllers\ComponentesController@show']);


Route::get('ajaxCli/{id}', ['as' => 'componentes.ajaxCli', 'uses' => 'App\Http\Controllers\ComponentesController@ajaxCli']);

//*ActualizacionesComponentes
Route::get('actualizacionesComponentes', ['as' => 'actualizacionesComponentes.index', 'uses' => 'App\Http\Controllers\ActualizacionesComponentesController@index']);
Route::get('actualizacionesComponentes/create', ['as' => 'actualizacionesComponentes.create', 'uses' => 'App\Http\Controllers\ActualizacionesComponentesController@create']);
Route::post('actualizacionesComponentes', ['as' => 'actualizacionesComponentes.store', 'uses' => 'App\Http\Controllers\ActualizacionesComponentesController@store']);
Route::get('actualizacionesComponentes/delete/{idusuario}', ['as' => 'actualizacionesComponentes.delete', 'uses' => 'App\Http\Controllers\ActualizacionesComponentesController@delete']);
Route::get('actualizacionesComponentes/edit/{idusuario}', ['as' => 'actualizacionesComponentes.edit', 'uses' => 'App\Http\Controllers\ActualizacionesComponentesController@edit']);
Route::get('actualizacionesComponentes/show/{idusuario}', ['as' => 'actualizacionesComponentes.show', 'uses' => 'App\Http\Controllers\ActualizacionesComponentesController@show']);




//*InstalacionesComponentes
Route::get('instalacionesComponentes', ['as' => 'instalacionesComponentes.index', 'uses' => 'App\Http\Controllers\InstalacionesComponentesController@index']);
Route::get('instalacionesComponentes/create', ['as' => 'instalacionesComponentes.create', 'uses' => 'App\Http\Controllers\InstalacionesComponentesController@create']);
Route::post('instalacionesComponentes', ['as' => 'instalacionesComponentes.store', 'uses' => 'App\Http\Controllers\InstalacionesComponentesController@store']);
Route::get('instalacionesComponentes/delete/{idusuario}', ['as' => 'instalacionesComponentes.delete', 'uses' => 'App\Http\Controllers\InstalacionesComponentesController@delete']);
Route::get('instalacionesComponentes/edit/{idusuario}', ['as' => 'instalacionesComponentes.edit', 'uses' => 'App\Http\Controllers\InstalacionesComponentesController@edit']);
Route::get('instalacionesComponentes/show/{idusuario}', ['as' => 'instalacionesComponentes.show', 'uses' => 'App\Http\Controllers\InstalacionesComponentesController@show']);


// LOGIN
Route::get('login', ['as' => 'login', 'uses' => 'App\Http\Controllers\CustomAuthController@index']);
Route::post('custom-login',  ['as' => 'auth.customLogin', 'uses' => 'App\Http\Controllers\CustomAuthController@customLogin']); 
Route::post('comprobarCorreo',  ['as' => 'auth.comprobarCorreo', 'uses' => 'App\Http\Controllers\CustomAuthController@comprobarCorreo']); 
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'App\Http\Controllers\CustomAuthController@logout']);
Route::get('recuperarPass', ['as' => 'auth.recuperarPass', 'uses' => 'App\Http\Controllers\CustomAuthController@recuperarPass']);