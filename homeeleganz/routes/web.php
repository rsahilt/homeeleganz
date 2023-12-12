<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControllerAdmin;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\Admin\ProductController as AdminController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TaxController;
use App\Http\Controllers\HomeController;
use App\Models\Review;

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

//for search
Route::post('/products/search', [ProductController::class, 'search'])
        ->name('products.search');

// frontend routes

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.details');

Route::get('/category/{categoryName}', [ProductController::class, 'category'])->name('category.view');

Route::get('/brands', [ProductController::class, 'brands'])->name('brands');

Route::post('/submit-message', [ProductController::class, 'store'])->name('submit.message');

Route::post('/submit-review', [ProductController::class, 'storeReview'])->name('submit.review');

Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('cart.add');

Route::get('/cart', [ProductController::class, 'viewCart'])->name('cart.view');


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

Route::get('/admin/reviews/', [ReviewController::class, 'index'])
        ->name('reviews')->middleware('auth');

Route::delete('/admin/reviews/{id}', [ReviewController::class, 'destroy'])
        ->name('delete-reviews')->middleware('auth');


Route::get('/checkout', function () {
        return view('checkout');
});

Route::get('/about', function () {
        return view('about');
});

Route::get('/contact', function () {
        return view('contact');
});

Route::get('/admin', [ControllerAdmin::class, 'dashboard'])->name('admin.dashboard')
        ->middleware('auth', 'admin'); //Route to Admin Dashboard

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home-edit', [HomeController::class, 'edit'])->name('home-edit')->middleware('auth');
Route::get('/user-reviews/{id}', [UserController::class, 'userReviews'])->name('userReviews')->middleware('auth');

Route::put('/users/{id}', [UserController::class, 'updateProfile'])
        ->name('updateProfile')->middleware('auth');

Route::get('/details', function () {
        return view('details');
});

// CRUD FOR USERS TABLE
Route::get('/admin/users/', [UserController::class, 'index'])
        ->name('userlist')->middleware('auth');

Route::get('/admin/users/create', [UserController::class, 'create'])
        ->name('createuser')->middleware('auth');

Route::post('/admin/users/', [UserController::class, 'store'])
        ->name('storeuser')->middleware('auth');

Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])
        ->name('edituser')->middleware('auth');

Route::put('/admin/users/{id}', [UserController::class, 'update'])
        ->name('updateuser')->middleware('auth');

Route::delete('/admin/users/{id}', [Usercontroller::class, 'destroy'])
        ->name('delete')->middleware('auth');

//CRUD FOR TAXES TABLE

Route::get('/admin/taxes/', [TaxController::class, 'index'])
        ->name('taxlist')->middleware('auth', 'admin');