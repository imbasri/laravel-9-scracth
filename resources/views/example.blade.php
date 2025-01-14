<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>

<body>
    @if ($params == 'world')
        <h1>Hello World</h1>
    @else
        <h1>Hello {{ $params }}</h1>
    @endif

    {{-- testing loop --}}
    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }} <br>
    @endfor

</body>

</html>
