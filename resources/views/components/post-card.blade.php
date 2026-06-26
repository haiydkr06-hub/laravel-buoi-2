@props(['post', 'iteration'])

<div class="card h-100 shadow-sm border-0 bg-white">
    <div class="card-body d-flex flex-column">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="badge bg-secondary">Bài viết số #{{ $iteration }}</span>
            <small class="text-muted">{{ $post->created_at }}</small>
        </div>
        <h3 class="card-title h5 fw-bold text-primary mb-3">
            {{ $post->title }}
        </h3>
        <p class="card-text text-secondary flex-grow-1">
            {{ $post->content }}
        </p>
        <hr class="my-2">
        <span class="small text-muted">Tác giả: <strong>{{ $post->author }}</strong></span>
    </div>
</div>