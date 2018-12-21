@extends('layout')

@section('content')
@section('title', 'Add new project')

<ul>
	<form method="POST" action="/projects">
		{{ csrf_field() }}

		<p><input type="text" name="title" placeholder="title"></p>
		<p><textarea type="text" name="description" placeholder="description"></textarea></p>
		<p>
			<button type="submit">submit!</button>
		</p>
	</form>
</ul>
@endsection
