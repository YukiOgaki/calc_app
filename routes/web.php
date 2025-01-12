<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcs/{value1}/{operator}/{value2}', [CalcController::class, 'calcs']);
