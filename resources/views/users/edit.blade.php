<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
</head>
<body>
    <h1>Edit user</h1>

    <form action="{{ route('users.update', $user['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ $user['name'] }}">
        <button type="submit">UPDATE</button>
    </form>

    <a href="{{ route('users.index') }}">Back to the user list.</a>
</body>
</html>