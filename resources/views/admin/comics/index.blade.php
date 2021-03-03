@extends('layouts.dashboard')

@section('content')
    <h1>All comics for admin</h1>
    @foreach ($comics as $comic)
        <h3>{{$comic->name}}</h3>
    @endforeach
@endsection