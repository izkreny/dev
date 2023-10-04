<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
</head>
<body>
    <h1>Members</h1>

    @if (session('success'))
        <h2 style="color: green">{{ session('success') }}</h2>
    @elseif (session('error'))
        <h2 style="color: red">{{ session('error') }}</h2>
    @endif
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Full name</th>
            <th>Member UID</th>
            <th>Member since</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>         
        @foreach ($members as $member)
        <tr>
            <td>{{ $member->id }}.</td>
            <td>
                <a href="{{ route('members.show', $member->id) }}">
                    {{ $member->name }} {{ $member->surname }}
                </a>
            </td>
            <td>{{ $member->member_uid }}</td>
            <td>{{ $member->created_at }}</td>
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
            <td colspan="6"><a href="{{ route('members.create') }}">Add a new member</a></td>
        </tr>
    </table>
        
</body>
</html>