<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a member</title>
</head>
<body>
    <h1>Edit a member</h1>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label><br>
        <input type="text" name="name" value="{{ $member->name }}"><br>
        <label>Surname</label><br>
        <input type="text" name="surname" value="{{ $member->surname }}"><br>
        <label>Member UID</label><br>
        <input type="text" name="member_uid" value="{{ $member->member_uid }}"><br>
        <button type="submit">UPDATE</button>
    </form>

</body>
</html>