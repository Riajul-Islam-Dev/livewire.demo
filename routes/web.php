<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/oc', function () {
    Artisan::call('optimize:clear');
    return '<pre>' . Artisan::output() . '</pre>';
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/create-user', function () {
    return view('create-user');
})->name('create-user');
