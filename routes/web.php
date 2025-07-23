<?php

use App\Http\Controllers\EventController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('index');
});*/

Route::view('/', 'index');

Route::get('/event', [EventController::class, 'event'])->name('eventos');


Route::get('/event/create', [EventController::class,'create'])->Middleware('auth')->name('event.create');

Route::post('/event', [EventController::class,'store']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::delete('/event/{id}', [EventController::class, 'destroy'])->Middleware('auth');

Route::get('/event/edit/{id}', [EventController::class, 'edit'])->Middleware('auth');

Route::put('/event/update/{id}', [EventController::class, 'update'])->Middleware('auth');

Route::post('/event/join/{id}', [EventController::class, 'joinEvent'])->Middleware('auth');

Route::post('/event/inscrever/{id}', [EventController::class, 'inscrever'])->Middleware('auth');

Route::get('/eventos/{id}', [EventController::class, 'show'])->name('event.show');


