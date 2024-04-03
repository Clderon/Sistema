<?php
// spell:disable 

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Registrocomprascontroller;
use Illuminate\Support\Facades\Route;

/*
    {{-- comando para poder encontrar archivos de extend --}}
    {{-- Get-ChildItem -Recurse -Filter "login.blade.php"  --}}
    {{-- Get-ChildItem -Recurse | Select-String "Sign in to start your session" -- }}
*/


Route::get('/',[App\Http\Controllers\HomeController::class, 'index'] )->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// recurso que determina todos los punto de entrada en recursos
Route::resource('/productos', ProductoController::class)->name('home','')->middleware('auth');

Route::resource('/registrocompras', Registrocomprascontroller::class)->name('home','')->middleware('auth');


