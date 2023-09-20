<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new member</title>
</head>
<body>
    <h1>Add new member</h1>

    <form action="{{route('members.store')}}" method="POST">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Surname</label><br>
        <input type="text" name="surname"><br>
        <button type="submit">SAVE</button>
    </form>

</body>
</html>