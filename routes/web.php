<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PortofolioController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [PortofolioController::class, "about"]);
Route::get('/about', [PortofolioController::class, "about"]);
Route::get('/education', [PortofolioController::class, "education"]);
Route::get('/skills', [PortofolioController::class, "skills"]);
Route::get('/experience', [PortofolioController::class, "experience"]);
Route::get('/interests', [PortofolioController::class, "interests"]);
