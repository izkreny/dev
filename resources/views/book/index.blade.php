<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <h1>Books</h1>

    <ol>
        @foreach ($books as $book)
        <li>{{$book->title}} by {{$book->author}} ({{$book->published}})</li>
        @endforeach
    </ol> 

    <a href="{{route('books.create')}}">Add new book</a>
</body>
</html>