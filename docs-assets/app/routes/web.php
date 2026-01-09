<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/components/{component}', [ComponentsController::class, 'show'])->name('components.show');
