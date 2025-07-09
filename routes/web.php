<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('index');
});*/

Route::view(' ', 'index');

Route::get('/eventos', [EventController::class, 'event']);

Route::get( '/logar', [EventController::class,'login']);

Route::get('/registro', [EventController::class,'register']);