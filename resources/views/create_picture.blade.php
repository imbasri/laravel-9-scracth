<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Picture</title>
</head>

<body>
    <form action="{{ route('picture.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name" placeholder="name">
        <br>
        <input type="file" name="picture" id="picture">
        <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>
