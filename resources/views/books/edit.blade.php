<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a book</title>
</head>
<body>
    <h1>Edit "{{ $book->title }}"</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title</label><br>
        <input type="text" name="title" value="{{ $book->title }}"><br>
        <label>Author</label><br>
        <input type="text" name="author" value="{{ $book->author }}"><br>
        <label>Published</label><br>
        <input type="number" name="published" value="{{ $book->published }}"><br>
        <button type="submit">UPDATE</button>
    </form>

</body>
</html>