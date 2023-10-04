<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#{{ $member->member_uid }} member info</title>
</head>
<body>
    <h1>UID #{{ $member->member_uid }} member info</h1>
    <h2>{{ $member->name }} {{ $member->surname }}</h2>
    <h3>Member since {{ $member->created_at }}</h3>

    <a href="{{ route('members.index') }}">Go back to the members list</a>

</body>
</html>