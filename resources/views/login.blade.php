<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>

    @if (session('success'))
        <h2 style="color: green">{{ session('success') }}</h2>
    @elseif (session('error'))
        <h2 style="color: red">{{ session('error') }}</h2>
    @endif
    
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit" value="Login">LOGIN</button>
    </form>

    <!-- https://laravel.com/docs/10.x/validation#quick-displaying-the-validation-errors -->
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color: red">{{ $error }}</li>
        @endforeach
    </ul>
    @endif

</body>
</html>