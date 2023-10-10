<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow a book</title>
</head>
<body>
    <h1>Borrow a book</h1>

    <form action="{{ route('borrows.store') }}" method="POST">
        @csrf
        <label>Member: </label>
        <select name="id_member" required>
            <option value="">-- Select a member --</option>
            @foreach ($members as $member)
            <option value="{{ $member->id }}">{{ $member->name }} {{ $member->surname }}</option>
            @endforeach
        </select>
        <br><br>
        <label>Book: </label>
        <select name="id_book" required>
            <option value="">-- Select a book --</option>
            @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select>
        <br><br>
        <label>Borrow from: </label>
        <input type="date" name="borrow_start_date" required>
        <br><br>
        <button type="submit">BORROW</button>
    </form>
    <br>
    <a href="{{ route('borrows.index') }}">Go back to the borrows list</a>
</body>
</html>
