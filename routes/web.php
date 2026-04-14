<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::view('/privacy-policy', 'privacy')->name('privacy');
Route::view('/terms-of-use', 'terms')->name('terms');

Route::view('/saranyakorn', 'team.sarunyakorn.home')->name('sarunyakorn');
Route::get('/nataphon', function () {
    abort(404);
})->name('nataphon');
Route::view('/sarunyakorn/privacy', 'team.sarunyakorn.privacy')->name('sarunyakorn.privacy');
Route::view('/sarunyakorn/terms', 'team.sarunyakorn.terms')->name('sarunyakorn.terms');
