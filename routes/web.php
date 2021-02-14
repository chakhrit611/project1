<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/hello/{name}/{age}', [HomeController::class, 'hello']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
