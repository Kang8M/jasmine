<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <a class="btn-success" href="/status/create">Create</a>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($statuses)
                @foreach($statuses as $status)
                    <tr>
                        <td>{{ $status['id'] }}</td>
                        <td>{{ $status['name'] }}</td>
                        <td>
                            <a class="btn-warning" href="/status/edit/{{ $status['id'] }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn-danger" href="/status/delete/{{ $status['id'] }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>
