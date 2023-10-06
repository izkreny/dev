<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <h1>Books</h1>

    @if (session('success'))
        <h2 style="color: green">{{ session('success') }}</h2>
    @elseif (session('error'))
        <h2 style="color: red">{{ session('error') }}</h2>
    @endif
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Published</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td> 
            <td>
                <a href="{{ route('books.show', $book->id) }}">
                    {{ $book->title }}
                </a>
            </td> 
            <td>{{ $book->author }}</td> 
            <td>{{ $book->published }}</td> 
            <td>
                <form action="{{ route('books.edit', $book->id) }}" method="GET">
                    @csrf
                    <button type="submit">EDIT</button>
                </form>
            </td>
            <td>
                <!-- TODO: Add confirmation pop-up! -->
                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="6"><a href="{{ route('books.create') }}">Add a new book</a></td>
        </tr>
    </table>
        
</body>
</html>