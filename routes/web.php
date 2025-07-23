<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductController;
//use App\Http\Controllers\UserController;
//use App\Http\Controllers\AdminController;


// Route::get('/', function () {
//    return view('Welcome');
// });


//Route::get('/', [ProductController::class,'index']);
//Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Halaman statis
//Route::view('/about', 'about')->name('about');
//Route::view('/contact', 'contact')->name('contact');
//Route::view('/gallery', 'gallery')->name('gallery');

//Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
//Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

//Route::get('/Contact', [ContactController::class, 'create']);
//Route::post('/Contact', [ContactController::class, 'store'])->name('contact.store');

//Route::get('/admin', [AdminController::class, 'create'])->name('admin.create');
//Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

Route::get('/home', function() {
    return view('home');
});