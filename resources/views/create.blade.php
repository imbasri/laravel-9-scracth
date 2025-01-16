<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>
    {{-- see error --}}
    @if ($errors->any())
    <p>{{ $errors->first() }}</p>
    @endif
    <form action="{{ route('store') }}" method="post">
        @csrf
        <input type="text" placeholder="name" name="name">
        <input type="number" placeholder="score" name="score">
        <button type="submit">Add</button>
    </form>
</body>

</html>
