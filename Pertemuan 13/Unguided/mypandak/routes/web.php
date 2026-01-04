<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert-raw', [WargaController::class, 'insertRaw']);
Route::get('/insert-qb', [WargaController::class, 'insertQB']);
Route::get('/insert-eloquent', [WargaController::class, 'insertEloquent']);
