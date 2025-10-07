<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodthingsController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/secretmaybe', [GoodthingsController::class, 'index'])->name('goodthings');
Route::get('/secretmaybe/goodthings/create', [GoodthingsController::class, 'create'])->name('goodthings.create');
Route::get('/secretmaybe/goodthings/{goodthing}', [GoodthingsController::class, 'show'])->name('goodthings.show');
Route::post('/secretmaybe', [GoodthingsController::class, 'store'])->name('goodthings.store');
Route::delete('/secretmaybe/goodthings/{goodthing}', [GoodthingsController::class, 'destroy'])->name('goodthings.destroy');