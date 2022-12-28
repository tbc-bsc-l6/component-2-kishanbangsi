<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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
    Route::get('/create', [ProductController::class, 'create'])->name('create');

    // Route to get a single product
    Route::get('/show/{product}', [ProductController::class, 'show'])->name('show');

    // Route to store a product
    Route::post('/', [ProductController::class, 'store'])->name('store');

    // Route to get form to update a product
    Route::get('/update/{product}', [ProductController::class, 'edit'])->name('edit');

    // Route to update a product
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');

    // Route to delete a product
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('delete');
});


// Route to get login page
Route::get('/login', [AuthController::class, 'login'])->name('login');

// Route to get register page
Route::get('/register', [AuthController::class, 'register'])->name('register');
