<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\admincontroller;

Route::get('/', function () {
    return view('Admin.index');
});

/////////Admin Route///////////////////////////////////
Route::get('/admin', [admincontroller::class, 'index']);