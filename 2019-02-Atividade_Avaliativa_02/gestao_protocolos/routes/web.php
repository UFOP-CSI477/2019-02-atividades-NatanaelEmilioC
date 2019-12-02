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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('listagem-usuario', 'UserController@listUser');

//Route::group(['namespace' => 'Form'],function(){
//});

/*
Route::get('usuarios','UserController@listAllUsers')->name('users.listAll');
Route::get('usuarios/novo','UserController@formAddUser')->name('users.formAddUser');
Route::get('usuarios/editar/{user}','UserController@formEditUser')->name('users.formEditUser');
Route::get('usuarios/{user}','UserController@listUser')->name('users.list');

Route::post('usuarios/store', 'UserController@storeUser')->name('users.store');

Route::put('usuarios/edit/{user}', 'UserController@edit')->name('users.edit');

Route::delete('usuarios/destroy/{user}', 'UserController@destroy')->name('user.destroy');
*/

//Rotas para usuarios
Route::resource('usuarios', 'UserController')->names('user')->parameters(['usuarios' => 'user']);

//Rotas dos requests(requisições)
Route::resource('requisicoes', 'RequestController')->names('request')->parameters(['requisicoes' => 'request']);

//Rotas dos subjects(protocolos)
Route::resource('protocolos', 'SubjectController')->names('subject')->parameters(['protocolos' => 'subject']);
