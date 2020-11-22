<?php

use App\Http\Controllers\LoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    if (auth()->user()) {
        return view('home');
    }

    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::name('users')->prefix('users')->middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('.index');
});

Route::name('produtos')->prefix('produtos')->middleware('auth')->group(function () {
    Route::get('/', [ProdutoController::class, 'index'])->name('.index');
    Route::get('/show/{id?}', [ProdutoController::class, 'show'])->name('.show');
    Route::post('/store', [ProdutoController::class, 'store'])->name('.store');
    Route::post('/update/{id}', [ProdutoController::class, 'update'])->name('.update');
    Route::delete('/delete/{id}', [ProdutoController::class, 'destroy'])->name('.delete');
});

Route::name('lotes')->prefix('lotes')->middleware('auth')->group(function () {
    Route::get('/', [LoteController::class, 'index'])->name('.index');
    Route::get('/show/{id?}', [LoteController::class, 'show'])->name('.show');
    Route::post('/store', [LoteController::class, 'store'])->name('.store');
    Route::post('/update/{id}', [LoteController::class, 'update'])->name('.update');
    Route::delete('/delete/{id}', [LoteController::class, 'destroy'])->name('.delete');
});

Route::name('vendas')->prefix('vendas')->middleware('auth')->group(function () {
    Route::get('/', [VendaController::class, 'index'])->name('.index');
    Route::get('/show/{id?}', [VendaController::class, 'show'])->name('.show');
    Route::post('/store', [VendaController::class, 'store'])->name('.store');
    Route::post('/update/{id}', [VendaController::class, 'update'])->name('.update');
    Route::delete('/delete/{id}', [VendaController::class, 'destroy'])->name('.delete');
});
