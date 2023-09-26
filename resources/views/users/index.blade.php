<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>

    <ol>
        @foreach ($users as $user)
        <li>#{{ $user['id'] }} -- {{ $user['name'] }} | 
            <a href="/user/{{ $user['id'] }}/edit">EDIT</a>
            <a href="/user/{{ $user['id'] }}/delete">DELETE</a>
        </li>
        @endforeach
    </ol>

    <a href="">Create new user</a>
</body>
</html>