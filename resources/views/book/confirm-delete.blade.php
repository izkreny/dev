<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm book delete action</title>
</head>
<body>
    <h2>Confirm delete of "{{ $book->title }}" book</h2>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">CONFIRM DELETE</button>
    </form>
    <br>
    <form action="{{ route('books.index') }}" method="GET">
        <button type="submit">CANCEL</button>
    </form>

</body>
</html>