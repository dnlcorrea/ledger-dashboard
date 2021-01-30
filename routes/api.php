<?php

use App\Http\Controllers\Api\AssetsController;
use Illuminate\Support\Facades\Route;

Route::get('/assets', [AssetsController::class, 'index']);
