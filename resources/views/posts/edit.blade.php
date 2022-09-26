<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>Posts</title>
    </head>
    <body>
        <h1>Posts</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title", value="{{ $post->title }}">
            </div>
            <div>
                <label for="body">body</label>
                <input type="text" name="body" id="body", value="{{ $post->body }}">
            </div>
            <button type="submit">Update</button>
        </form>
    </body>
</html>
