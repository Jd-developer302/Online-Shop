<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcatgeoryController;
use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    ////////Category Routes/////////////////////
    Route::get('/category', [CategoryController::class, 'index'])->name('Admin.Category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('Admin.Category.create');
    Route::post('/dashboard/category', [CategoryController::class, 'store'])->name('Admin.Category.store');
    Route::delete('/dashboard/category{id}', [CategoryController::class, 'destroy'])->name('Admin.Category.destroy');
    Route::get('/dashboard/category/{id}', [CategoryController::class, 'edit'])->name('Admin.Category.edit');
    Route::put('/dashboard/category/{id}', [CategoryController::class, 'update'])->name('Admin.Category.update');
    ////////SubCategory Routes/////////////////////
    Route::get('/subcategory', [SubcatgeoryController::class, 'index'])->name('Admin.Subcategory.index');
    Route::get('/subcategory/create', [SubcatgeoryController::class, 'create'])->name('Admin.Subcategory.create');
    Route::post('/dashboard/subcategory', [SubcatgeoryController::class, 'store'])->name('Admin.Subcategory.store');
    Route::delete('/dashboard/subcategory{id}', [SubcatgeoryController::class, 'destroy'])->name('Admin.Subcategory.destroy');
    Route::get('/dashboard/subcategory/{id}', [SubcatgeoryController::class, 'edit'])->name('Admin.Subcategory.edit');
    Route::put('/dashboard/subcategory/{id}', [SubcatgeoryController::class, 'update'])->name('Admin.Subcategory.update');
    ////////Brand Routes/////////////////////
    Route::get('/brand', [BrandController::class, 'index'])->name('Admin.Brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('Admin.Brand.create');
});


require __DIR__.'/auth.php';
