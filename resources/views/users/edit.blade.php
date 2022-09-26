<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>Users</title>
    </head>
    <body>
        <h1>Users</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}">
            </div>
            <dev>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </dev>
            <button type="submit">Update</button>
        </form>
        <a href="{{ route('users.index') }}">Back</a>
    </body>
</html>
