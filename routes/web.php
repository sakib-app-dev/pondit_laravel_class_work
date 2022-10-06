<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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

// Route::get('/', function () {
//     return view('users.index');
// });


Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
Route::get('/invoice', [UserController::class, 'invoice'])->name('invoice');
Route::get('/product-list', [UserController::class, 'productList'])->name('product-list');
Route::get('/product-detail', [UserController::class, 'productDetail'])->name('product-detail');
Route::get('/thank-you', [UserController::class, 'thankYou'])->name('thank-you');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');


//admin

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin',[AdminController::class,'home'])->name('admin');
Route::get('/admin/profile',[AdminController::class,'profile'])->name('profile');
Route::get('/admin/notification',[AdminController::class,'notification'])->name('notification');

// product
Route::get('/admin/product-add',[AdminController::class,'addProduct'])->name('addProduct');
Route::get('/admin/product-list',[AdminController::class,'productList'])->name('listProduct');
Route::get('/admin/product-show',[AdminController::class,'productShow'])->name('showProduct');
Route::get('/admin/product-edit',[AdminController::class,'productEdit'])->name('editProduct');

// category
Route::get('/admin/category-add',[AdminController::class,'addCategory'])->name('addCategory');
Route::get('/admin/category-list',[AdminController::class,'categoryList'])->name('listCategory');
Route::get('/admin/category-show',[AdminController::class,'categoryShow'])->name('showCategory');
Route::get('/admin/category-edit',[AdminController::class,'categoryEdit'])->name('editCategory');
