<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Khởi tạo mảng dữ liệu giả cho Lab 2
        $posts = collect([
            (object)[
                'id' => 1, 
                'title' => 'Học Laravel cơ bản', 
                'author' => 'Hải Ý', 
                'content' => 'Nội dung bài viết số 1...',
                'created_at' => '24/06/2026'
            ],
            (object)[
                'id' => 2, 
                'title' => 'Tìm hiểu Resource Controller', 
                'author' => 'Thầy Bình', 
                'content' => 'Nội dung bài viết số 2...',
                'created_at' => '25/06/2026'
            ],
            (object)[
                'id' => 3, 
                'title' => 'Làm chủ Blade Template', 
                'author' => 'Hải Ý', 
                'content' => 'Nội dung bài viết số 3...',
                'created_at' => '26/06/2026'
            ]
        ]);

        // Trả dữ liệu về đúng thư mục view 'posts' và file 'index' vừa đổi tên ở Bước 1
        return view('posts.index', compact('posts'));
    }
}