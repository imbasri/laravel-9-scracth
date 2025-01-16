<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
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
            </tr>
        @endforeach
    </table>
    {{-- current page --}}
    Current Page: {{ $data->currentPage() }} <br>
    Total Page : {{ $data->total() }} <br>
    Total PerPage : {{ $data->perpage() }} <br>

    Pagination : {{ $data->links('pagination::bootstrap-4') }}

    <p><a href="/create">Create</a></p>
    <p><a href="/create">Create</a></p>
</body>

</html>
