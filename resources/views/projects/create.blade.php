@extends('layout')

@section('content')
@section('title', 'Add new project')

<div class="row">
	<div class="col-5">
		<form class="form-group" method="POST" action="/projects">
			{{ csrf_field() }}

			<p><input class="form-control" type="text" name="title" placeholder="title"></p>
			<p><textarea class="form-control" type="text" name="description" placeholder="description"></textarea></p>
			<p>
				<button class="btn btn-info" type="submit">submit!</button>
			</p>
		</form>
	</div>
</div>
@endsection
