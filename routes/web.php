<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/สวัสดี/{name}', function ($name) {
    return "สวัสดี $name";
});
Route::get('/calculater/{num1}/{num2}', function ($num1,$num2) {
    return "ผลบวกของเลข$num1 และ $num2 = " . ($num1+$num2);
});
