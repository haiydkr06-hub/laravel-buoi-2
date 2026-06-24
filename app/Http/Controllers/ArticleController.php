<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // 1. Tạo mảng dữ liệu giả chứa danh sách bài viết nằm ngay phía dưới tên Class
    private $articles = [
        1 => ['title' => 'Học Laravel cơ bản', 'content' => 'Nội dung hướng dẫn học Laravel từ đầu...'],
        2 => ['title' => 'Tìm hiểu Resource Controller', 'content' => 'Cách tạo bộ khung CRUD nhanh chóng...'],
        3 => ['title' => 'Làm chủ Blade Template', 'content' => 'Thiết kế giao diện đẹp mắt với Blade...']
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 2. Trả về view 'articles.index' kèm theo dữ liệu mảng bài viết giả lập
        return view('articles.index', ['articles' => $this->articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tạm thời để trống theo yêu cầu skeleton
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Tạm thời để trống theo yêu cầu skeleton
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Hàm này dành cho Bước 6, mình chuẩn bị trước luôn cho Hải Ý nhé:
        if (!array_key_exists($id, $this->articles)) {
            abort(404);
        }

        $article = $this->articles[$id];
        return view('articles.show', compact('article'));
    }

    // Các hàm edit, update, destroy bên dưới giữ nguyên trống trơn như mặc định
}