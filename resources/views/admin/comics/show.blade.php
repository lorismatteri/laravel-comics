@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>{{$comic->name}}</h1>
        <p>{{$comic->description}}</p>
        
    </div>
@endsection