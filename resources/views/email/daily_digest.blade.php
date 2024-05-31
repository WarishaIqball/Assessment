<!DOCTYPE html>
<html>
<head>
    <title>Daily Digest of Top Posts</title>
</head>
<body>
    <h1>Top Posts for Today</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <p><strong>Posted at:</strong> {{ $post->created_at->format('Y-m-d H:i:s') }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
