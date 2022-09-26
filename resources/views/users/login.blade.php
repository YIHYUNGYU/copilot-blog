<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>Users</title>
    </head>
    <body>
        <h1>Users</h1>
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('users.index') }}">Go To Users</a>
    </body>
</html>
