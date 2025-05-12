<?php

use Illuminate\Support\Facades\Route;

// Only root path shows welcome page
Route::get('/', function () {
    return view('welcome');
});

// Catch all unmatched routes and return 404
Route::fallback(function () {
    abort(404);
});
