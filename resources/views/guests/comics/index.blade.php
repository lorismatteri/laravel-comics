@extends('layouts.app')

@section('content')
    <div class="banner my-5 py-5 px-2 d-flex">
        <div class="banner_title d-flex justify-content-center align-items-center ">
            <h1 class="text-uppercase text-white font-weight-bold my-2 mx-5">comics & graphic novels</h1>
        </div>
        @foreach($comics as $comic)
        <div class="card w-25 mx-2 bg-dark border-0">
            <a href="{{route('comics/{comic}', ['comic' => $comic->id])}}">
                <img src="{{asset('storage/' . $comic->cover)}}" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <h5 class="card-title text-white font-weight-bold">{{$comic->name}}</h5>
                <p class="card-text text-uppercase text-primary font-weight-bold">Available now</p>
            </div>
        </div>
        @endforeach
    </div>

    <section id="must_read" class="container pb-5">
        <h1 class="text-primary text-uppercase font-weight-bold mb-5">Must Reads</h1>
        <div class="d-flex">
            @foreach($articles as $article)
            <div class="card w-25 mx-2  border-0">
                <img src="{{asset('img/' . $article->cover)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold text-primary">{{$article->subtitle}}</h5>
                    <h4 class="card-title font-weight-bold">{{$article->title}}</h4>
                    <p class="card-text">{{$article->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="serie" class="py-5">
        <div class="container d-flex flex-wrap">
            <div class="serie_title d-flex justify-content-center align-items-center ">
                <h1 class="text-uppercase text-white font-weight-bold my-2 mx-5">Current series</h1>
            </div>
            @foreach($series as $serie)
            <div class="card border-0 bg-transparent text-white">
                @if($serie->cover)
                <img src="{{asset('img/' . $serie->cover)}}" class="card-img-top" alt="...">
                @else
                <img src="{{asset('img/noimg.jpg')}}" class="card-img-top" alt="...">
                @endif
                <div class="card-body px-0">
                    <h6 class="card-title font-weight-bold">{{$serie->name}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection