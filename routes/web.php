<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

// middlewares found here auth, verified\

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/locale', [LocaleController::class, 'update'])->name('locale.update');

require __DIR__.'/settings.php';
