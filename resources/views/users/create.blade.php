<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new user</title>
</head>
<body>
    <h1>Create a new user</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>Name: </label>
        <input type="text" name="name">
        <br>
        <button type="submit">CREATE</button>
    </form>

    <a href="{{ route('users.index') }}">Back to the user list.</a>
</body>
</html>