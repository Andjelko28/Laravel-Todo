<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [RegisteredUserController::class, 'create']);

Route::get('/login', [SessionController::class, 'create']);

Route::get('/todo/create', [TodoController::class, 'create']);
Route::post('/todo', [TodoController::class, 'store']);
