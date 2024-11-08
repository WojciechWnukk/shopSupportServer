<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


// Definicja tras API
Route::get('/products', [ProductController::class, 'index']);
