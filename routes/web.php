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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/career', [CareerController::class, 'career'])->name('career');
Route::get('/contact-us', [ContactController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-page-form', [ContactController::class, 'contact_page_form'])->name('contact_page_form');
Route::get('/about', [AboutController::class, 'About'])->name('About');
Route::get('/Services', [ServicesController::class, 'Services'])->name('Services');
Route::get('/industry', [IndustryController::class, 'industry'])->name('industry');
Route::get('/manufacturers', [ManufacturersController::class, 'manufacturers'])->name('manufacturers');
Route::get('/manufacturer-detail/{id?}', [ManufacturerDetailController::class, 'manufacturer_detail'])->name('manufacturer_detail');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
// Route::get('/product-category', [ProductCategoryController::class, 'product_category'])->name('product_category');
Route::get('/product-category/{category}', [ProductController::class, 'product_category'])->name('product_category');