<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/secretmaybe', function (){
    $goodthings = [
        ["id" => "1", "goodthings" => "Got 10 RM from the road!", "date" => "26/08/2025"], 
        ["id" => "2", "goodthings" => "Today is sunny!", "date" => "03/09/2025"],
    ];
    
    return view('secretstuff.secretpage', ["greeting" => "Hello!", "goodstuff" => $goodthings ]);
});

Route::get('/secretmaybe/goodthings/{id}', function ($id) {
    $goodthings = [
        ["id" => "1", "goodthings" => "Got 10 RM from the road!", "date" => "26/08/2025"], 
        ["id" => "2", "goodthings" => "Today is sunny!", "date" => "03/09/2025"],
    ];
    
    return view('secretstuff.goodthings', ["id" => $id]);
});