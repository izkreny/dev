<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#{{ $book->id }} book info</title>
</head>
<body>
    <h2>{{ $book->title }} by {{ $book->author }}</h2>
    <h3>Published: {{ $book->published }}</h3>

    <form action="{{ route('books.edit', $book->id) }}" method="GET">
        @csrf
        <button type="submit">EDIT</button>
    </form>
    <!-- TODO: Add confirmation pop-up! -->
    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <br>
    <a href="{{ route('books.index') }}">Go back to the books list</a>

</body>
</html>