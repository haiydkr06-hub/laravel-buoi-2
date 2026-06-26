<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController; // Khai báo dòng này

// 1. Trang chủ (gọi file welcome.blade.php)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// 2. Định nghĩa route cho danh sách bài viết Lab 2
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// 3. Về chúng tôi
Route::get('/about', function () {
    return view('about');
})->name('about');

// 4. Liên hệ
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Gom nhóm /shop cho các view nằm trong thư mục shop
Route::prefix('shop')->group(function () {
    // Sản phẩm
    Route::get('/products', function () {
        return view('shop.products');
    })->name('shop.products');

    // Giỏ hàng
    Route::get('/cart', function () {
        return view('shop.cart');
    })->name('shop.cart');
});