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
    return view('welcome');
});

Route::get('atores', function () {
    return 'Olá' .
        "<br> Está é a rota de listagem de atores";
});

Route::Group(['prefix' => 'atores', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('',              ['as' => 'atores', 'uses' => 'AtoresController@index']);
    Route::get('create',        ['as' => 'atores.create', 'uses' => 'AtoresController@create']);
    Route::get('{id}/destroy',  ['as' => 'atores.destroy', 'uses' => 'AtoresController@destroy']);
    Route::get('{id}/edit',     ['as' => 'atores.edit', 'uses' => 'AtoresController@edit']);
    Route::put('{id}/update',   ['as' => 'atores.update', 'uses' => 'AtoresController@update']);
    Route::post('store',        ['as' => 'atores.store', 'uses' => 'AtoresController@store']);
});

// Route::get('atores', 'AtoresController@index');
// Route::get('atores/create', 'AtoresController@create');
// Route::post('atores/store', 'AtoresController@store');
// Route::get('atores/{id}/destroy', 'AtoresController@destroy');
// Route::get('atores/{id}/edit', 'AtoresController@edit');
// Route::post('atores/{id}/update', 'AtoresController@update');

Route::get('teste', function () {
    return view('teste');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
