<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::prefix('equipes')->group(function () {
    Route::get('/', [EquipesController::class, 'index'])->name('equipes.lista');
});
