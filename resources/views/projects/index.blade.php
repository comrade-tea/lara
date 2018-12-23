@extends('layout')

@section('content')
	@section('title', 'All projects')

	<ul>
		@foreach($projects as $item)
			<li>
				<h3>{{ $item->title }} id: {{ $item->id }}</h3>
				<p>{{ $item->description }}</p>
			</li>
		@endforeach

	</ul>
@endsection
