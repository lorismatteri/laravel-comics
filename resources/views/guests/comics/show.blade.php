@extends('layouts.app')

@section('content')
    <div id="comic_head" class="py-5 d-flex">
        
        <div class="cover">
            <span class="bg-primary">COMIC BOOK</span>
            <img src="{{asset('storage/' . $comic->cover)}}" alt="">
            <div class="py-2"><a href="#" class="text-white text-decoration-none">VIEW GALLERY</a></div>
        </div>
        
    </div>

    <div class="container">
        <section id="content">
            <h1>{{$comic->title}}</h1>
            <div class="d-flex">
                <div class="price bg-success">
                    <span>U.S. Price: {{$comic->price}}</span>
                    <span>
                        @if($comic->available)
                        Available
                        @else
                        No available
                        @endif
                    </span>
                </div>
                <div class="check bg-success">
                    <span>Check availability<i class="fas fa-sort-down"></i></span>
                </div>
            </div>
            <p>{{$comic->description}}</p>
        </section>
        <section id="specs">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Talent</h2>
                    <ul class="list-unstyled">
                        <li>{{$comic->designer}}</li>
                        <li>{{$comic->author}}</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h2>Specs</h2>
                    <ul class="list-unstyled">
                        <li>{{$comic->serie}}</li>
                        <li>{{$comic->price}}</li>
                        <li>{{$comic->created_at}}</li>
                        <li>{{$comic->volume}}</li>
                        <li>{{$comic->size}}</li>
                        <li>{{$comic->page_count}}</li>
                        <li>{{$comic->rating}}</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection