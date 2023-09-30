<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME!</title>
</head>
<body>
    @if (session('success'))
        <h2 style="color: red">{{ session('success') }}</h2>
    @endif
</body>
</html>