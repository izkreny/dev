<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD FORM</title>
</head>
<body>
    <form action="/add" method="POST">
        @csrf
        <lablel>Number #1</label>
        <input type="number" name="number1"><br>
        <lablel>Number #2</label>
        <input type="number" name="number2"><br>
        <button type="submit">SUM</button>
    </form>
</body>
</html>