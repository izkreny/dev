<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#{{ $member->member_uid }} member info</title>
</head>
<body>
    <h2>{{ $member->name }} {{ $member->surname }} (UID: {{ $member->member_uid }})</h2>
    <h3>Member since {{ $member->created_at }}</h3>

    <form action="{{ route('members.edit', $member->id) }}" method="GET">
        @csrf
        <button type="submit">EDIT</button>
    </form>
    <!-- TODO: Add confirmation pop-up! -->
    <form action="{{ route('members.destroy', $member->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <br>
    <a href="{{ route('members.index') }}">Go back to the members list</a>

</body>
</html>