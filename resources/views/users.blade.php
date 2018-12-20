@extends('layout')

@section('title')
    users
@stop

@section('content')
    <h1>Users page</h1>

    <h2>All users</h2>

    @foreach($users as $user)
        <div>{{ $user->name }}</div>
    @endforeach

    <h2>Add user</h2>

    <form action="/users" method="POST">
        {{ csrf_field() }}

        <p>
            <input type="text" name="name" placeholder="name">
        </p>
        <p>
            <input type="email" name="email" placeholder="email">
        </p>
        <p>
            <input type="password" name="password" placeholder="password">
        </p>

        <button type="submit">Submit</button>
    </form>
@endsection

