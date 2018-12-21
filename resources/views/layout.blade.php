<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<title>@yield('title', 'title default')</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">

	<nav>
		<ul>
			<li><a href="/">home</a></li>
			<li><a href="/projects">projects</a></li>
			<li><a href="/projects/create">create new project</a></li>
		</ul>
	</nav>

	<h1>@yield('title')</h1>

	@yield('content')
</div>

</body>
</html>
