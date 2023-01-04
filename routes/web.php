<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route to get all products
Route::get('/', [ProductController::class, 'index'])->name('index');

Route::prefix('/products')->group(function () {
    // Route to get form to create a product
    Route::get('/create', [ProductController::class, 'create'])->name('create')->middleware('auth');

    // Route to get categories
    Route::get('/all', [PageController::class, 'all'])->name('all')->middleware('auth');

    // Route to get a single product
    Route::get('/show/{product}', [ProductController::class, 'show'])->name('show')->middleware('auth');

    // Route to store a product
    Route::post('/', [ProductController::class, 'store'])->name('store')->middleware('auth');

    // Route to get form to update a product
    Route::get('/update/{product}', [ProductController::class, 'edit'])->name('edit')->middleware('auth');

    // Route to update a product
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('update')->middleware('auth');

    // Route to delete a product
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('delete')->middleware('auth');
});


Route::prefix('/users')->group(function() {
    // Route to get login page
    Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
    
    // Route to login a user
    Route::post('/login', [AuthController::class, 'authenticate'])->name('user.auth');

    // Route to get register page
    Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
    
    // Route to create a user
    Route::post('/register', [AuthController::class, 'store'])->name('user.store');

    // Route to logout a user
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});
