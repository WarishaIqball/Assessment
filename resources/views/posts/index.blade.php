@include('auth.head')

<div class="container">
    <div class="row justify-content-end mb-3">
        <div class="col-auto">
</br></br>
            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

            
        </div>
        <h1>Posts</h1>
        <div class="mb-3">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Add Post</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }} <!-- Pagination links -->
    </div>
@include('auth.footer')