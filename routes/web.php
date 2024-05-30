<?php

use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\productcontrolller;
use Illuminate\Support\Facades\Route;
//Main Page
Route::get('/', function () {
    return view('daraz');
});
// Seller Route
Route::view('/seller-dashboard', '.pages.seller.seller-board');
// Add categories
Route::view('/add-categories', '.pages.seller.add-cate');
// Form-adding ctaegory
Route::post('/add-category', [categorycontroller::class, 'addCategories']);
// Getting Data from controller class getcategory
Route::get('/', [categorycontroller::class, 'getCategories']);
// Signle Product
Route::get('/single-product/{id}', [productcontrolller::class, 'findproduct']);
//Add Product
Route::view('/add-product', '.pages.seller.add-product');
Route::post('/add-product-back', [productcontrolller::class, 'addproduct']);
