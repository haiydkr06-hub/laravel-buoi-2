@extends('layouts.app')

@section('title', $article['title'])

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="bg-white p-5 rounded-3 shadow-sm border">
            <h1 class="fw-bold text-primary mb-3">{{ $article['title'] }}</h1>
            <p class="text-muted small">Tác giả: Hải Ý • Lớp Lập trình Backend</p>
            <hr>
            <div class="fs-5 text-dark my-4" style="line-height: 1.8;">
                {{ $article['content'] }}
            </div>
            <hr>
            <a href="{{ route('articles.index') }}" class="btn btn-outline-primary fw-bold mt-2">
                ⬅️ Quay lại danh sách
            </a>
        </div>
    </div>
</div>
@endsection