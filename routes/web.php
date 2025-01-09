<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oc', function () {
    Artisan::call('optimize:clear');
    return '<pre>' . Artisan::output() . '</pre>';
});
