<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\admincontroller;
use App\Http\Controllers\Admin\logincontroller;

Route::get('/', function () {
    return view('Admin.index');
});

/////////Admin Route///////////////////////////////////
Route::get('/admin', [admincontroller::class, 'index']);
Route::get('/login', [logincontroller::class, 'index']);