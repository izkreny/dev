<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrows</title>
</head>
<body>
    <h1>Borrows</h1>

    @if (session('success'))
        <h2 style="color: green">{{ session('success') }}</h2>
    @elseif (session('error'))
        <h2 style="color: red">{{ session('error') }}</h2>
    @endif

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Member</th>
            <th>Book</th>
            <th>Borrowed</th>
            <th>Returned</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($borrows as $borrow)
        <tr>
            <td>
                <a href="{{ route('borrows.show', $borrow->id) }}">
                    {{ $borrow->id }}.
                </a>
            </td>
            <td>{{ $borrow->member->name }} {{ $borrow->member->surname }}</td>
            <td>{{ $borrow->book->title }}</td>
            <td>{{ $borrow->borrow_start_date }}</td>
            <td>{{ $borrow->borrow_end_date ?? 'Not returned' }}</td>
            <td>
                <form action="{{ route('borrows.edit', $borrow->id) }}" method="GET">
                    @csrf
                    <button type="submit">EDIT</button>
                </form>
            </td>
            <td>
                <!-- TODO: Add confirmation pop-up! -->
                <form
                    action="{{ route('borrows.destroy', $borrow->id) }}"
                    method="POST"
                    onsubmit="return confirm('Are you sure?!');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="7"><a href="{{ route('borrows.create') }}">Borrow a book!</a></td>
        </tr>
    </table>

</body>
</html>
