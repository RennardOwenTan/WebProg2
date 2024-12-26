<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'viewHomepage']);
Route::get('/category/{id}', [HomeController::class, 'showAnimalOfCategory']);
Route::get('/about', [HomeController::class, 'viewAbout']);
Route::get('/details/{id}', [HomeController::class, 'showDetail']);