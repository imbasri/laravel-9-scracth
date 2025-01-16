<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
        @foreach ($students as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->score }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
