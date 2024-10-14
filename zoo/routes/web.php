<?php

use App\Http\Controllers\homepageController;
use App\Http\Controllers\KontaktController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homepageController::class, "index"]);

Route::get('info', [KontaktController::class, "index"]);
