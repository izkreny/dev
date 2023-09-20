<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new book</title>
</head>
<body>
    <h1>Add new book</h1>

    <form action="{{route('books.store')}}" method="POST">
        @csrf
        <label>Title</label><br>
        <input type="text" name="title"><br>
        <label>Author</label><br>
        <input type="text" name="author"><br>
        <label>Published</label><br>
        <input type="number" name="published"><br>
        <button type="submit">SAVE</button>
    </form>

</body>
</html>