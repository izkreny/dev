<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page #1</title>
</head>
<body>
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

    <h1>Welcome to page #4</h1>
</body>
</html>