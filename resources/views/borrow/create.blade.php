<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new borrow</title>
</head>
<body>
    <h1>Add new borrow</h1>

    <form action="{{ route('borrows.store') }}" method="POST">
        @csrf
        <label>Member: </label>
        <select name="id_member">
            <option value="">-- Select a member --</option>
            @foreach ($members as $member)
            <option value="{{ $member->id }}">{{ $member->name }} {{ $member->surname }}</option>
            @endforeach
        </select><br><br>
        <label>Book: </label>
        <select name="id_book">
            <option value="">-- Select a book --</option>
            @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select><br><br>
        <label>Borrow from: </label>
        <input type="date" name="borrow_start_date"><br><br>
        <button type="submit">BORROW</button>
    </form>

</body>
</html>

</body>
</html>