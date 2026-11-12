<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// login page
Route::get('/login', [AuthController::class, 'login']);

// regiter page
Route::get('/register', [AuthController::class, 'register']);
