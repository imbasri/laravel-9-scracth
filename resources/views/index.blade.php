<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->name }}</td>
                <td>{{ $d->score }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
