<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

# Resource Controller Routes - limited to only index (all) and show (specific id) methods
Route::resource('/todos', TodoController::class)->only([
    'index', 'show'
]);;

# Resource Controller Routes - limited to only index (all) and show (specific id) methods
Route::resource('/tags', TagController::class);


Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/welcome', function () {
    return view('welcome');
});
