<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show detail
    </title>
</head>

<body>
    <p>ID :{{ $students->id }}</p>
    <p>Name:{{ $students->name }}</p>
    <p>Score:{{ $students->score }}</p>
    <hr>
    <p>Contact:</p>
    <p>Phone:{{ is_null($students->contact) ? '-' : $students->contact->phone }}</p>
    <p>Address:{{ is_null($students->contact) ? '-' : $students->contact->address }}</p>
    <p>Email:{{ is_null($students->contact) ? '-' : $students->contact->email }}</p>
    <p>Teachers:{{ $students->teacher->name }}</p>
    <hr>
    <p>Activities:</p>
    @foreach ($students->activities as $active)
        <p>{{ $active->name }}</p>
    @endforeach
</body>

</html>
