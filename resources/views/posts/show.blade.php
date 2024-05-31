@include('auth.head')
<div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <p>Created At: {{ $post->created_at }}</p>
        <p>Updated At: {{ $post->updated_at }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
    </div>
@include('auth.footer')