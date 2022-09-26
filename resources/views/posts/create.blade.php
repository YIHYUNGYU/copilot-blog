<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>Posts</title>
    </head>
    <body>
        <h1 class="posts-create-title">Posts</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="posts-create-title-input">
                <label class="posts-create-title-input-label" for="title">Title</label>
                <input class="posts-create-title-input-text" type="text" name="title" id="title">
            </div>
            <div class="posts-create-body-input">
                <label class="posts-create-body-input-label" for="body">body</label>
                <textarea class="posts-create-body-input-textarea" name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <button class="posts-create-submit-button" type="submit">Create</button>
        </form>
        <a class="posts-create-back-button" href="{{ route('posts.index') }}">Back</a>
    </body>
</html>
