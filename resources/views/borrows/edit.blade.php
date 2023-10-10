<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow edit</title>
</head>
<body>
    <h1>Borrow edit</h1>

    <form action="{{ route('borrows.update', $borrow->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Member: </label>
        <select name="id_member" required>
            @foreach ($members as $member)
                <option
                    value="{{ $member->id }}"
                    {{ $member->id === $borrow->id_member ? 'selected' : ''}}>
                        {{ $member->name }} {{ $member->surname }}
                </option>
            @endforeach
        </select>
        <br><br>
        <label>Book: </label>
        <select name="id_book" required>
            @foreach ($books as $book)
            <option
                value="{{ $book->id }}"
                {{ $book->id === $borrow->id_book ? 'selected' : ''}}>
                    {{ $book->title }}
            </option>
            @endforeach
        </select>
        <br><br>
        <label>Borrow from: </label>
        <input type="date" name="borrow_start_date" value="{{ $borrow->borrow_start_date }}" required>
        <br><br>
        <label>Borrow to: </label>
        <input type="date" name="borrow_end_date" value="{{ $borrow->borrow_end_date ?? '' }}">
        <br><br>
        <button type="submit">UPDATE</button>
    </form>
    <br>
    <a href="{{ route('borrows.index') }}">Go back to the borrows list</a>
</body>
</html>
