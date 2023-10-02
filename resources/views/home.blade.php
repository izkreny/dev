<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>

    @if (session('success'))
        <h2 style="color: green">{{ session('success') }}</h2>
    @elseif (session('error'))
        <h2 style="color: red">{{ session('error') }}</h2>
    @endif

    <nav>
        <ol>
            <li><a href="{{ route('home') }}">HOME </a></li>
            <li><a href="{{ route('page1') }}">Page #1</a></li>
            <li><a href="{{ route('page2') }}">Page #2</a></li>
            <li><a href="{{ route('page3') }}">Page #3</a></li>
            <li><a href="{{ route('page4') }}">Page #4</a></li>
            <li><a href="{{ route('logout') }}">LOGOUT</a></li>
        </ol>
    </nav>

    <h1>Welcome to HOME page</h1>

</body>
</html>