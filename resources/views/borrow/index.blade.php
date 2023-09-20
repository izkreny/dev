<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrows</title>
</head>
<body>
    <h1>Borrows</h1>

    <ul>
        @foreach ($borrows as $borrow)
        <li>#{{$borrow->id}}
            <br>Member ID: #{{$borrow->id_member}}
            <br>Book ID: #{{$borrow->id_book}}
            <br>Borrowed at {{$borrow->borrow_start_date}}</li>
        @endforeach
    </ul> 

    <a href="{{route('borrows.create')}}">Add new borrow</a>
</body>
</html>