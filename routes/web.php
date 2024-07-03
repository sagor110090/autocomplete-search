<?php

use Illuminate\Support\Facades\Route;

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/tailwind', function () {
    return view('tailwind');
});
