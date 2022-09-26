<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>Users</title>
    </head>
    <body>
        <h1>Users</h1>
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
        <a href="{{ route('users.index') }}">Back</a>
    </body>
</html>
