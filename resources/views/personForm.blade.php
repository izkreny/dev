<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PERSON FORM</title>
</head>
<body>
    <form action="/store" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Surname</label>
        <input type="text" name="surname"><br>
        <button type="submit">SAVE</button>
    </form>
    <br>
    <a href="/show">Show database records</a>
</body>
</html>