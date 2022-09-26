<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>{{ $post->title }}</title>
    </head>
    <body>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <form action="{{ route('posts.edit', $post->id) }}" method="GET">
            @csrf
            <button type="submit">Edit</button>
        </form>
        <a href="{{ route('posts.index') }}">Back</a>
    </body>
</html>
