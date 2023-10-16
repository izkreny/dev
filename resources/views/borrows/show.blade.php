<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#{{ $borrow->id }} borrow info</title>
</head>
<body>
    <h2>"{{ $member->name }} {{ $member->surname }}" borrowed "{{ $book->title }}"</h2>
    <h3>From: {{ $borrow->borrow_start_date }}</h3>
    <h3>Returned: {{ $borrow->borrow_end_date ?? 'Not yet! 😊' }}</h3>

    <form action="{{ route('borrows.edit', $borrow->id) }}" method="GET">
        @csrf
        <button type="submit">EDIT</button>
    </form>
    <!-- TODO: Add confirmation pop-up! -->
    <form
        action="{{ route('borrows.destroy', $borrow->id) }}"
        method="POST"
        onsubmit="return confirm('Are you sure?!');">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
    </form>
    <br>
    <a href="{{ route('borrows.index') }}">Go back to the borrows list</a>

</body>
</html>
