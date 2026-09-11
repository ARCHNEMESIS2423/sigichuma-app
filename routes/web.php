<?php

use Illuminate\Support\Facades\Route;
// middlewares found here auth, verified\

Route::get('/', function () {
    return view('welcome');
})->name('home');

require __DIR__.'/settings.php';
