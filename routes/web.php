<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [ProfileController::class, 'index'])->name('home');
