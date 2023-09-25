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
        <label>Member ID</label><br>
        <input type="number" name="id_member"><br>
        <label>Book ID</label><br>
        <input type="number" name="id_book"><br>
        <label>Borrow start date</label><br>
        <input type="date" name="borrow_start_date"><br>
        <button type="submit">BORROW</button>
    </form>

</body>
</html>

</body>
</html>