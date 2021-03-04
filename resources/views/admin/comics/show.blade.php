@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="text-center">
            @if ($comic->cover)
                <img src="{{asset('storage/' . $comic->cover)}}" alt="" >
            @endif
        </div>
        <h1>{{$comic->name}}</h1>
        <p>{{$comic->description}}</p>
        
    </div>
@endsection