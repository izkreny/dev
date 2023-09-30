<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>Name: </label>
        <input type="text" name="name" required><br>

        <label>Email: </label>
        <input type="email" name="email" required><br>
        
        <label>Password: </label>
        <input type="password" name="password" required><br>
        
        <label>Confirm password: </label>
        <input type="password" name="password_confirmation" required><br>

        <button type="submit">REGISTER</button>
    </form>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color: red">{{ $error }}</li>
        @endforeach
    </ul>
    @endif

</body>
</html>