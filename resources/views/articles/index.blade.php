@extends('layouts.app')

@section('title', 'Danh sách bài viết')

@section('content')
<div class="bg-white p-4 rounded-3 shadow-sm border">
    <h1 class="mb-2 fw-bold text-dark">DANH SÁCH BÀI VIẾT (Thực hành 2)</h1>
    <p class="text-muted mb-4">Sinh viên thực hiện: Hải Ý</p>
    <hr>

    <div class="row">
        @foreach($articles as $id => $article)
            <div class="col-12 mb-3">
                <div class="card h-100 shadow-sm border-0 bg-light">
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="{{ route('articles.show', $id) }}" class="text-decoration-none text-primary fw-bold">
                                {{ $article['title'] }}
                            </a>
                        </h3>
                        <p class="card-text text-secondary mb-0">Bấm vào tiêu đề để xem chi tiết bài viết số {{ $id }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection