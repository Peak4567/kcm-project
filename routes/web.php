<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::view('/privacy-policy', 'privacy')->name('privacy');
Route::view('/terms-of-use', 'terms')->name('terms');
