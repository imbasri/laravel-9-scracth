<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1>{{ __('message.welcome') }}</h1>
    <h1>{{ __('welcome to this page!') }}</h1>
    <p>Locale : {{ App::getLocale() }}</p>
    <a href="{{ route('set_locale', 'en') }}">Inggris</a>
    <a href="{{ route('set_locale', 'id') }}">Indonesia</a>

    {{-- check login --}}
    @if (Auth::check())
        <p>User login : {{ $user->name }} - {{ $ids }}</p>
        {{-- {{ dd($user) }} --}}

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a class="me-2" href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endif

    {{-- check user dari route --}}


    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Score</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>
                    <a href="{{ route('show', $d->id) }}">{{ $d->name }}</a>
                </td>
                <td>{{ $d->score }}</td>
                <td>
                    <form action="{{ route('edit', $d) }}" method="get">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('delete', $d) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- current page --}}
    Current Page: {{ $data->currentPage() }} <br>
    Total Page : {{ $data->total() }} <br>
    Total PerPage : {{ $data->perpage() }} <br>

    Pagination : {{ $data->links('pagination::bootstrap-4') }}

    <p><a href="/create">Create</a></p>
    Role : {{ Auth::check() ? $user->role : '' }}
</body>

</html>
