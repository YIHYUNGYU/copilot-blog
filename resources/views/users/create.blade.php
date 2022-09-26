<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>Users</title>
    </head>
    <body>
        <h1>Users</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" name="password" id="password">
            </div>
            <button type="submit">Create</button>
        </form>
    </body>
</html>
