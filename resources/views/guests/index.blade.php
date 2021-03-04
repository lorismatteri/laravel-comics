@extends('layouts.app')

@section('content')
    {{-- <div class="white_row"></div> --}}
    <div class="banner my-5 py-5 px-2 d-flex">
        <div class="banner_title d-flex justify-content-center align-items-center ">
            <h1 class="text-uppercase text-white font-weight-bold my-2 mx-5">comics & graphic novels</h1>
        </div>
        @foreach($comics as $comic)
        <div class="card w-25 mx-2 bg-dark border-0">
            <img src="{{asset('storage/' . $comic->cover)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-white font-weight-bold">{{$comic->name}}</h5>
                <p class="card-text text-uppercase text-primary font-weight-bold">Available now</p>
            </div>
        </div>
        @endforeach
    </div>

    <section id="must_read py-5" class="container">
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
@endsection