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
<form method="post" action="/status/update/{{ $status['id'] }}">
    @csrf
    @method('PUT')
    <input id="name"
           name="name"
           type="text"
           placeholder="Status Name"
           value="{{ $status['name'] }}"
           class="@error('name') is-invalid @enderror"
    />
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="submit" value="Edit" />
</form>
</body>
</html>
