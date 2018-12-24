@extends('layout')

@section('content')
@section('title', 'Editor')

<div class="row">
	<div class="col-5">
		<form class="form-group" method="POST" action="/projects/{{$project->id}}">
			{{ csrf_field() }}
			{{ method_field("PATCH") }}

			<p><input class="form-control" type="text" name="title" value="{{$project->title}}"></p>
			<p><textarea class="form-control" type="text" name="description">{{ $project->description }}</textarea></p>
			<p>
				<button class="btn btn-info" type="submit">update project</button>
			</p>
			<p>

			</p>
		</form>

		<form action="/projects/{{$project->id}}" method="POST">
			@method('DELETE')
			@csrf

			<button type="submit" class="btn btn-danger">hmm</button>
		</form>
	</div>
</div>
@endsection
