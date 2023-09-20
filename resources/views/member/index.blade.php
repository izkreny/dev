<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
</head>
<body>
    <h1>Members</h1>

    <ol>
        @foreach ($members as $member)
        <li>{{$member->name}} {{$member->surname}}</li>
        @endforeach
    </ol> 

    <a href="{{route('members.create')}}">Add new member</a>
</body>
</html>