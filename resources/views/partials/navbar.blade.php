<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-info" href="{{ route('home') }}">Phú Xuân Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-semibold">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Trang Chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Về Chúng Tôi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Liên Hệ</a></li>
               <li class="nav-item"><a class="nav-link text-warning fw-bold" href="{{ route('posts.index') }}">Bài Viết (Lab 2)</a></li>
            </ul>
        </div>
    </div>
</nav>