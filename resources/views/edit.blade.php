<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="{{ route('update', $student) }}" method="post">
        {{-- ubah method --}}
        @method('patch')
        @csrf
        <input type="text" name="name" id="name" value="{{ $student->name }}">
        <input type="number" name="score" id="score" value="{{ $student->score }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
