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
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>         
        @foreach ($members as $member)
        <tr>
            <td>{{ $member->id }}.</td>
            <td>{{ $member->name }}</td>
            <td>{{ $member->surname }}</td>
            <td>
                <form action="{{ route('members.edit', $member->id) }}" method="GET">
                    @csrf
                    <button type="submit">EDIT</button>
                </form>
            </td>
            <td>
                <!-- TODO: Add confirmation pop-up! -->
                <form action="{{ route('members.destroy', $member->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="5"><a href="{{ route('members.create') }}">Add new member</a></td>
        </tr>
    </table>
        
</body>
</html>