<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>Posts</title>
        <style>
            .posts-index {
                margin: 0 auto;
                width: 800px;
            }
            .posts-index-title {
                text-align: center;
            }
            .posts-index-ul {
                list-style: none;
                padding: 0;
            }
            .posts-index-li {
                margin: 10px 0;
            }

            .posts-index-create-button {
                display: block;
                margin: 0 auto;
                width: 100px;
                height: 30px;
                line-height: 30px;
                text-align: center;
                background-color: #ccc;
                text-decoration: none;
                color: #000;
            }
        </style>
    </head>
    <body class="posts-index">
        <h1 class="posts-index-title">Posts</h1>
        <ul class="posts-index-ul">
            @foreach ($posts as $post)
                <li class="posts-index-li">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
        <a class="posts-index-create-button" href="{{ route('posts.create') }}">Create</a>
        <<form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </body>
</html>
