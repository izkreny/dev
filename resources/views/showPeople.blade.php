<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEOPLE</title>
</head>
<body>
    <h1>People from database</h1>
    <ol>
    @foreach($people as $person)
        <li>{{$person->name}} {{$person->surname}}</li>
    @endforeach
    </ol>
    <br>
    <a href="/form">BACK TO FORM</a>
</body>
</html>