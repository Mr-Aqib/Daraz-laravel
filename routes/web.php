<?php

use App\Http\Controllers\categorycontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('daraz');
});
// Seller Route
Route::view('/seller-dashboard', '.pages.seller.seller-board');
// Add categories
Route::view('/add-categories', '.pages.seller.add-cate');
// Form-adding ctaegory
Route::post('/adding-category', [categorycontroller::class, 'addCategories']);
