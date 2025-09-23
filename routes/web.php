<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodthingsController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/secretmaybe', [GoodthingsController::class, 'index']);

Route::get('/secretmaybe/goodthings/create', function () {
    return view('secretstuff.create');
});

Route::get('/secretmaybe/goodthings/{id}', function ($id) {
    $goodthings = [
        ["id" => "1", "goodthings" => "Got 10 RM from the road!", "date" => "26/08/2025"], 
        ["id" => "2", "goodthings" => "Today is sunny!", "date" => "03/09/2025"],
    ];
    
    return view('secretstuff.goodthings', ["id" => $id]);
});