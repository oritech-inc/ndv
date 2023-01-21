<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailController;


Route::get('/', function () {
    return view('error');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/error', [App\Http\Controllers\errorsController::class, 'index']);

// Route::get('mail', [mailController::class, 'index']);
