<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
// 1. Trang chủ (gọi file welcome.blade.php)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// 2. Về chúng tôi (gọi file about.blade.php)
Route::get('/about', function () {
    return view('about');
})->name('about');

// 3. Liên hệ (gọi file contact.blade.php)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// Gom nhóm /shop cho các view nằm trong thư mục shop
Route::prefix('shop')->group(function () {

    // 4. Sản phẩm (gọi file shop/products.blade.php)
    Route::get('/products', function () {
        return view('shop.products');
    })->name('shop.products');

    // 5. Giỏ hàng (gọi file shop/cart.blade.php)
    Route::get('/cart', function () {
        return view('shop.cart');
    })->name('shop.cart');


});


    Route::resource('articles', ArticleController::class);