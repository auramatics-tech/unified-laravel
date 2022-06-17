<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\ManufacturersController;
use App\Http\Controllers\ManufacturerDetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\NewsController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/career', [CareerController::class, 'career'])->name('career');
Route::get('/contact-us', [ContactController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-page-form', [ContactController::class, 'contact_page_form'])->name('contact_page_form');
Route::get('/about', [AboutController::class, 'About'])->name('About');
Route::get('/Services', [ServicesController::class, 'Services'])->name('Services');
Route::get('/industry', [IndustryController::class, 'industry'])->name('industry');
Route::get('/industry/{name}', [IndustryController::class, 'industry_detail'])->name('industry_detail');
Route::get('/manufacturers', [ManufacturersController::class, 'manufacturers'])->name('manufacturers');
Route::get('/manufacturer-detail/{id?}', [ManufacturerDetailController::class, 'manufacturer_detail'])->name('manufacturer_detail');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/remove/item/{id?}', [CartController::class, 'remove_from_cart'])->name('remove_from_cart');
// Route::get('/product-category', [ProductCategoryController::class, 'product_category'])->name('product_category');
Route::get('/product-category/{category}', [ProductController::class, 'product_category'])->name('product_category');
Route::get('/product-list', [ProductListController::class, 'product_list'])->name('product_list');
Route::get('/product-detail/{id}', [ProductListController::class, 'product_detail'])->name('product_detail');
Route::get('/news/{id}', [NewsController::class, 'news'])->name('news');
Route::post('/submit', [CartController::class, 'submit'])->name('submit');
Route::post('/add/cart', [CartController::class, 'add_cart'])->name('add_cart');
Route::post('/subscribe_user', [HomeController::class, 'subscribe_user'])->name('subscribe_user');