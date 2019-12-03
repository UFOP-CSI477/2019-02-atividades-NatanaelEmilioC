<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('welcome');

Route::get('/area_admin', function () {
    return view('areaAdmin');
})->name('area_admin');

Route::get('/area_usuario', function () {
    return view('areaUsuario');
})->name('area_usuario');

Route::get('/area_geral', function () {
    return view('areaGeral');
})->name('area_geral');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController')->names('user')->parameters(['usuarios' => 'user']);


//Rotas dos requests(requisições)
Route::resource('requisicoes', 'RequetController')->names('requet')->parameters(['requisicoes' => 'requet']);

//Rotas dos subjects(protocolos)
Route::resource('protocolos', 'SubjectController')->names('subject')->parameters(['protocolos' => 'subject']);
