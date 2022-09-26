<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>Posts</title>
    </head>
    <body>
        <h1>Users</h1>
        <div>Welcome My Blog</div>
        <ul>
            @foreach ($users as $user)
                <li>
                    <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('users.create') }}">Create</a>
        <a href="{{ route('posts.index') }}">Go To Post</a>
        <a href="{{ route('login') }}">Login</a>
    </body>
</html>
