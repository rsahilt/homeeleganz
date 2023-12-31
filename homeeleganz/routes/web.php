<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControllerAdmin;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApiController;

use App\Http\Controllers\Admin\ProductController as AdminController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TaxController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\MessageController;
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

Route::get('/', [ProductController::class, 'homepage'])
        ->name('homepage');

//for search
Route::post('/products/search', [ProductController::class, 'search'])
        ->name('products.search');


// Admin Dashboard search
Route::post('/admin/products/search', [AdminController::class, 'search'])
        ->name('admin.products.search')->middleware('auth', 'admin');


// frontend routes
Route::get('/maintenance', [ProductController::class, 'maintenance'])
        ->name('maintenance');

Route::get('/about', [ProductController::class, 'aboutmethod'])
        ->name('aboutpage');

Route::get('/contact', [ProductController::class, 'contactmethod'])
        ->name('contactpage');

Route::get('/products', [ProductController::class, 'index'])
        ->name('productslistfrontend');

Route::get('/products/{id}', [ProductController::class, 'show'])
        ->name('product.details');

Route::get('/category/{categoryName}', [ProductController::class, 'category'])
        ->name('category.view');

Route::get('/brands', [ProductController::class, 'brands'])
        ->name('brands');

Route::post('/submit-message', [ProductController::class, 'store'])
        ->name('submit.message');

Route::post('/submit-review', [ProductController::class, 'storeReview'])
        ->name('submit.review');

Route::post('/add-to-cart', [ProductController::class, 'addToCart'])
        ->name('cart.add');

Route::get('/cart', [ProductController::class, 'viewCart'])
        ->name('cart.view');

Route::get('/checkout', [ProductController::class, 'viewCheckout'])
        ->name('checkout');

Route::get('/cart/remove/{productId}', [ProductController::class, 'removeFromCart'])
        ->name('cart.remove');

Route::get('/invoice', [App\Http\Controllers\InvoiceController::class, 'show'])
        ->name('invoice.show')->middleware('auth');

Route::get('/policy', function () {
        return view('policy');
})->name('policy');

//Admin Dashboard
Route::get('/admin', [ControllerAdmin::class, 'dashboard'])->name('admin.dashboard')
        ->middleware('auth', 'admin');

//CRUD FOR PRODUCTS TABLE

Route::get('/admin/products/', [AdminController::class, 'index'])
        ->name('productlist')->middleware('auth', 'admin');

Route::get('/admin/products/create', [AdminController::class, 'create'])
        ->name('create')->middleware('auth', 'admin');

Route::post('/admin/products/', [AdminController::class, 'store'])
        ->name('storeproducts')->middleware('auth', 'admin');

Route::get('/admin/products/{id}/edit', [AdminController::class, 'edit'])
        ->name('editproduct')->middleware('auth', 'admin');

Route::put('/admin/products/{id}', [AdminController::class, 'update'])
        ->name('update')->middleware('auth', 'admin');

Route::delete('/admin/products/{id}', [AdminController::class, 'destroy'])
        ->name('deleteproducts')->middleware('auth', 'admin');

Route::get('/admin/reviews/', [ReviewController::class, 'index'])
        ->name('reviews')->middleware('auth', 'admin');

Route::delete('/admin/reviews/{id}', [ReviewController::class, 'destroy'])
        ->name('delete-reviews')->middleware('auth', 'admin');




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
        ->name('userlist')->middleware('auth', 'admin');

Route::get('/admin/users/create', [UserController::class, 'create'])
        ->name('createuser')->middleware('auth', 'admin');

Route::post('/admin/users/', [UserController::class, 'store'])
        ->name('storeuser')->middleware('auth', 'admin');

Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])
        ->name('edituser')->middleware('auth', 'admin');

Route::put('/admin/users/{id}', [UserController::class, 'update'])
        ->name('updateuser')->middleware('auth', 'admin');

Route::delete('/admin/users/{id}', [Usercontroller::class, 'destroy'])
        ->name('delete')->middleware('auth', 'admin');



//CRUD FOR TAXES TABLE
Route::get('/admin/taxes/', [TaxController::class, 'index'])
        ->name('taxlist')->middleware('auth', 'admin');

Route::get('/admin/taxes/create', [TaxController::class, 'create'])
        ->name('createtax')->middleware('auth', 'admin');

Route::post('/admin/taxes/', [TaxController::class, 'store'])
        ->name('storetax')->middleware('auth', 'admin');

Route::get('/admin/taxes/{id}/edit', [TaxController::class, 'edit'])
        ->name('edittax')->middleware('auth', 'admin');

Route::put('/admin/taxes/{id}', [TaxController::class, 'update'])
        ->name('updatetax')->middleware('auth', 'admin');

Route::delete('/admin/taxes/{id}', [TaxController::class, 'destroy'])
        ->name('deletetax')->middleware('auth', 'admin');

//CRUD FOR Categories
Route::get('/admin/categories', [CategoryController::class, 'index'])
        ->name('categorieslist')->middleware('auth', 'admin');

Route::get('/admin/categories/create', [CategoryController::class, 'create'])
        ->name('createcategory')->middleware('auth', 'admin');

Route::post('/admin/categories/', [CategoryController::class, 'store'])
        ->name('storecategory')->middleware('auth', 'admin');

Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])
        ->name('deletecategory')->middleware('auth', 'admin');

Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])
        ->name('editcategory')->middleware('auth', 'admin');

Route::put('/admin/categories/{id}', [CategoryController::class, 'update'])
        ->name('updatecategory')->middleware('auth', 'admin');

// CRUD for Orders
Route::get('/admin/orders', [OrderController::class, 'index'])
        ->name('orders.index')->middleware('auth', 'admin');
Route::get('/admin/orders/{id}', [OrderController::class, 'viewOrder'])
        ->name('orders.viewOrder')->middleware('auth', 'admin');

Route::delete('/admin/orders/{id}', [OrderController::class, 'destroy'])
        ->name('orders.destroy')->middleware('auth', 'admin');;

// transaction/payment
Route::post('/transactionprocess', [ApiController::class, 'index'])
        ->name('transaction')->middleware('auth');

Route::get('/termsandconditions', [ProductController::class, 'termsandconditions'])
        ->name('termsandconditions');

// For inbox
Route::get('/admin/inbox', [MessageController::class, 'index'])
        ->name('admin.inbox.index');

Route::delete('/admin/inbox/{id}', [MessageController::class, 'destroy'])
     ->name('admin.inbox.destroy')->middleware('auth', 'admin');

Route::get('/my-orders', [ProductController::class, 'vieworders'])
        ->name('myorders');
