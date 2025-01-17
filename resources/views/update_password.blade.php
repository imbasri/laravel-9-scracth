<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    @if (Session::has('message'))
        <h2>{{ Session::get('message') }}</h2>
    @endif
    <form action="{{ route('store_password') }}" method="post">
        @method('patch')
        @csrf
        <input type="password" name="new_password" id="password">
        <input type="password" name="new_password_confirmation" id="password">
        <button type="submit">Update</button>

    </form>
</body>

</html>
