<?php

use Illuminate\Support\Facades\Route;

Route::get('/blaze', function () {
    return view('blaze');
});
Route::get('/b', function () {
    return view('b');
});
Route::get('/wo', function () {
    return view('wo');
});
