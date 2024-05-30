<?php

use App\Http\Controllers\categorycontroller;
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
Route::view('/single-product', '.pages.user.single-product');
