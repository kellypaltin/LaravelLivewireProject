<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CategoriaComponent;
use App\Livewire\CategoriaComponent as LivewireCategoriaComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::prefix('admin')->middleware("auth")->group(function(){

    //Nuestras rutas

    Route::get('/saludo', [PruebaController::class, "index"]); //usuarios autenticados pueden ingresar 

    Route::get('/', function(){
        return view('admin.index');
    });

    Route::get('/usuario', function(){
        return view('admin.usuario.index');
    });

    Route::get('/categoria', LivewireCategoriaComponent::class);
});