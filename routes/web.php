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

    // Route to get categories
    Route::get('/all', [PageController::class, 'all'])->name('all')->middleware('auth');

    // Route to get results based on search
    Route::get('/search', [PageController::class, 'search'])->name('search')->middleware('can:search-product');

    // Route to show page if non authorized user tries to update, delete or search products
    Route::get('/non-authorized', [PageController::class, 'auth'])->name('auth');
});


// Route to register, login and logout
Route::prefix('/users')->group(function() {
    // GET login page
    Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
    
    // POST login a user
    Route::post('/login', [AuthController::class, 'authenticate'])->name('user.auth');

    // GET register page
    Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
    
    // POST create a user
    Route::post('/register', [AuthController::class, 'store'])->name('user.store');

    // POST logout a user
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

    // GET form to edit a user
    Route::get('/edit/{id}', [PageController::class, 'edit'])->name('user.edit')->middleware('auth');

    // PUT a user
    Route::put('/edit/{id}', [PageController::class, 'update'])->name('user.update')->middleware('auth');

    // DELETE a user
    Route::delete('/delete/{id}', [PageController::class, 'destroy'])->name('user.delete')->middleware('auth');

    // GET page if non authorized user tries to update, delete or search products
    Route::get('/non-authorized', [PageController::class, 'auth'])->name('auth');
});


// Route related to dashboard
Route::prefix('/dashboard')->group(function() {
    // GET user dashboard
    Route::get('/user/{id}', [PageController::class, 'accessUserProduct'])->name('dashboard.user')->middleware('auth');

    // GET admin dashboard for users list
    Route::get('/admin/users-list', [PageController::class, 'accessAllUsers'])->name('dashboard.users-list')->middleware('auth');

    // GET admin dashboard for products list
    Route::get('/admin/products-list', [PageController::class, 'accessAllProducts'])->name('dashboard.products-list')->middleware('auth');

    // Route to show page if non authorized user tries to update, delete or search products
    Route::get('/non-authorized', [PageController::class, 'auth'])->name('auth');
});


// Route to show 404 page
Route::fallback([PageController::class, 'error']);
