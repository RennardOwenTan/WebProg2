<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'viewHomepage']);
Route::get('/category/{search}', [HomeController::class, 'viewCategory']);
