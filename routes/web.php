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

Auth::routes();

Route::get('/', function () {
    if (auth()->user()){
        return view('home');
    }

    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UsuariosController@index');

Route::get('/canais', 'CanaisController@index');

Route::get('/estagios', 'EstagioController@index');

Route::name('equipes')->prefix('equipes')->group(function () {
    Route::get('/', 'EquipesController@index')->name('.index');
    Route::post('/add', 'EquipesController@store')->name('.store');
    Route::get('/{id}', 'EquipesController@show')->name('.show');
    Route::put('/{id}', 'EquipesController@update')->name('.update');
    Route::get('/{id}/delete', 'EquipesController@destroy')->name('.destroy');
});

