<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControllerAdmin;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\Admin\ProductController as AdminController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.details');;

Route::get('/category/{categoryName}', [ProductController::class, 'category'])->name('category.view');

Route::get('/brands', [ProductController::class, 'brands'])->name('brands');

Route::post('/submit-message', [ProductController::class, 'store'])->name('submit.message');

Route::post('/submit-review', [ProductController::class, 'storeReview'])->name('submit.review');

//CRUD FOR PRODUCTS TABLE

Route::get('/admin/products/', [AdminController::class, 'index'])
        ->name('productlist')->middleware('auth');

Route::get('/admin/products/create', [AdminController::class, 'create'])
        ->name('create')->middleware('auth');

Route::post('/admin/products/', [AdminController::class, 'store'])
        ->name('storeproducts')->middleware('auth');

Route::get('/admin/products/{id}/edit', [AdminController::class, 'edit'])
        ->name('editproduct')->middleware('auth');

Route::put('/admin/products/{id}', [AdminController::class, 'update'])
        ->name('update')->middleware('auth');

Route::delete('/admin/products/{id}', [AdminController::class, 'destroy'])
        ->name('delete')->middleware('auth');


Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', [ControllerAdmin::class, 'dashboard'])->name('admin.dashboard')
        ->middleware('auth','admin'); //Route to Admin Dashboard

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/details', function(){
    return view('details');
});

// CRUD FOR USERS TABLE
Route::get('/admin/users/', [UserController::class, 'index'])
        ->name('userlist')->middleware('auth');

Route::get('/admin/users/create', [UserController::class, 'create'])
        ->name('createuser')->middleware('auth');

Route::get('/admin/users/', [UserController::class, 'store'])
        ->name('storeuser')->middleware('auth');
        
 Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])
        ->name('edituser')->middleware('auth');

Route::put('/admin/users/{user}', [UserController::class, 'update'])
        ->name('updateuser')->middleware('auth');
    



