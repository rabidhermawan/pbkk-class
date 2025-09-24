<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodthingsController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/secretmaybe', [GoodthingsController::class, 'index']);

Route::get('/secretmaybe/goodthings/create', [GoodthingsController::class, 'create']);

Route::get('/secretmaybe/goodthings/{id}', [GoodthingsController::class, 'show']);