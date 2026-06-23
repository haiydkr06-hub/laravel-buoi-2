<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Tuyến đường trang chủ - Gọi method index của BlogController
Route::get('/', [BlogController::class, 'index']);

// Tuyến đường trang giới thiệu (About)
Route::get('/about', function () {
    return '<h1>Về chúng tôi</h1><p>Đại học Phú Xuân</p>';
});

// BƯỚC 7: Thêm route tham số truyền ID bài viết
Route::get('/posts/{id}', function ($id) {
    return "Đang xem bài viết số: " . $id;
});