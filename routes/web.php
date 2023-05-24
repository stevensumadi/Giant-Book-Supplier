<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'home']);

Route::get('/detail/{book}', [AppController::class, 'detail']);

Route::get('/category/{category}', [AppController::class, 'category']);

Route::get('/contact', [AppController::class, 'contact']);

Route::get('/publisher', [AppController::class, 'publisher']);

Route::get('/publisher-detail/{publisher}', [AppController::class, 'publisherDetail']);
