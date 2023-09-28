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
        <li>ID: {{ $user['id'] }} -- Name: {{ $user['name'] }} || 
            <form action="/users/{{ $user['id'] }}/edit" method="GET">
                @csrf
                <button type="submit">EDIT</button>
            </form>    
            <form action="/users/{{ $user['id'] }}/destroy" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </li>
        @endforeach
    </ol>

    <a href="/users/create">Create new user</a>
</body>
</html>