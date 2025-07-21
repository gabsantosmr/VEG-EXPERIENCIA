<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('index');
});*/

Route::view('/', 'index');

Route::get('/event', [EventController::class, 'event'])->name('eventos');


Route::get('/painel', [EventController::class,'create']);

Route::post('/event', [EventController::class,'store']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
