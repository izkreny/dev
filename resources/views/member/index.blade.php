<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
</head>
<body>
    <h1>Members</h1>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Action</th>
        </tr>         
        @foreach ($members as $member)
        <tr>
            <td>{{ $member->id }}.</td>
            <td> {{$member->name}}</td>
            <td>{{$member->surname}}</td>
            <td><a href="{{ route('members.edit', $member->id) }}">EDIT</a></td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4"><a href="{{route('members.create')}}">Add new member</a></td>
    </table>
        
</body>
</html>