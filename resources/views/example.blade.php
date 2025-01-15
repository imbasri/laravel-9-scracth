<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>

<body>

    <h1>Your Activity:</h1>
    @foreach ($activity as $active)
        <p>{{ $active->name }}</p>
    @endforeach

    <p>many to many</p>
    {{ $students }}

    @foreach ($activity as $active)
        <p>{{ $active->name }}</p>
    @endforeach
</body>

</html>
