<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('index');
});*/

Route::view('/', 'index');

Route::get('/event', [EventController::class, 'event']);

Route::get( '/logar', [EventController::class,'login']);

Route::get('/registro', [EventController::class,'register']);

Route::get('/painel', [EventController::class,'create']);

Route::post('/event', [EventController::class,'store']);