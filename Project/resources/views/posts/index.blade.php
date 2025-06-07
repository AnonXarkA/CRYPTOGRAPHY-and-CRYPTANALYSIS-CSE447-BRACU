<!DOCTYPE html>
<html>
<head>
    <title>My Posts</title>
</head>
<body>
    <h1>Your Posts</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <a href="{{ route('posts.create') }}">Create a New Post</a>

    @if ($posts->isEmpty())
        <p>No posts available.</p>
    @else
        @foreach ($posts as $post)
            <div>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
            </div>
        @endforeach
    @endif
</body>
</html>
