<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'title default')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>

<nav>
    <ul>
        <li><a href="/">home</a></li>
        <li><a href="/users">users</a></li>
        <li><a href="/about">about</a></li>
    </ul>
</nav>

@yield('content', '<i>there is no content yet, lol</i>')

</body>
</html>
