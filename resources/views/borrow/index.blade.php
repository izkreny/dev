<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrows</title>
</head>
<body>
    <h1>Borrows</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Member</th>
            <th>Book</th>
            <th>Borrowed</th>
            <th>Returned</th>
        </tr>         
        @foreach ($borrows as $borrow)
        <tr>
            <td>{{ $borrow->id }}.</td>
            <td>{{ $borrow->name }} {{ $borrow->surname }}</td>
            <td>{{ $borrow->title }}</td>
            <td>{{ $borrow->borrow_start_date }}</td>
            <td>{{ $borrow->borrow_end_date }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="5"><a href="{{ route('borrows.create') }}">Borrow a book!</a></td>
        </tr>
    </table>

</body>
</html>