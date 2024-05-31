@include('auth.head')
<div class="container">
        <h1>Edit Post</h1>
      
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="" required>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@include('auth.footer')