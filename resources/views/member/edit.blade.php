<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit member</title>
</head>
<body>
    <h1>Edit member</h1>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label><br>
        <input type="text" name="name" value="{{ $member->name }}"><br>
        <label>Surname</label><br>
        <input type="text" name="surname" value="{{ $member->surname }}"><br>
        <button type="submit">UPDATE</button>
    </form>

</body>
</html>