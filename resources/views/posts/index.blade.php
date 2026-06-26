@extends('layouts.app')

@section('title', 'Danh sách bài viết - Lab 2')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-dark">DANH SÁCH BÀI VIẾT</h1>
        <span class="badge bg-primary fs-6">Sinh viên: Hải Ý</span>
    </div>

    <div class="row">
        @forelse($posts as $post)
            <div class="col-md-4 mb-4">
                <x-post-card :post="$post" :iteration="$loop->iteration" />
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center py-4">
                    <h4 class="fw-bold">Hiện tại chưa có bài viết nào!</h4>
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection