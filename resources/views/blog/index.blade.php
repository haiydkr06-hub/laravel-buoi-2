    <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phú Xuân Blog</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; max-width: 800px; margin: 0 auto; padding: 20px; background-color: #fcfcfc; }
        h1 { color: #333; border-bottom: 2px solid #333; padding-bottom: 10px; text-align: center; }
        .post { background: #ffffff; padding: 20px; margin-bottom: 20px; border-radius: 6px; border-left: 5px solid #007bff; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .post h2 { margin-top: 0; color: #007bff; font-size: 1.5em; }
        .meta { color: #666; font-size: 0.9em; font-style: italic; margin-top: 10px; }
    </style>
</head>
<body>

    <h1>Danh sách bài viết - Đại học Phú Xuân</h1>

    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post['title'] }}</h2>
            <p class="meta">Tác giả: {{ $post['author'] }} | Ngày đăng: {{ $post['date'] }}</p>
        </div>
    @endforeach

</body>
</html>