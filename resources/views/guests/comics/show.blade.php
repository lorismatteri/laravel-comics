@extends('layouts.app')

@section('content')
    <div id="comic_head" class="py-5 d-flex">
        
        <div class="cover">
            <span class="bg-primary px-2 py-1 text-white font-weight-bold">COMIC BOOK</span>
            <img src="{{asset('storage/' . $comic->cover)}}" alt="">
            <div class="d-flex align-items-center px-2 py-1"><a href="#" class="text-white text-decoration-none font-weight-bold">VIEW GALLERY</a></div>
        </div>
        
    </div>

    
    <section id="content">
        <div class="container py-5">
            <h1 class="pb-3 font-weight-bold">{{$comic->name}}</h1>
            <div id="check" class="d-flex text-white w-75 font-weight-bold">
                <div class="bg-success p-3 w-75 d-flex justify-content-between br_1">
                    <span>U.S. Price: {{$comic->price}}</span>
                    <span class="text_green text-uppercase">
                        @if($comic->available)
                        Available
                        @else
                        No available
                        @endif
                    </span>
                </div>
                <div class="bg-success p-3 w-25 d-flex justify-content-center">
                    <span>Check availability<i class="fas fa-sort-down pl-2 align-text-top"></i></span>
                </div>
            </div>
            <p class="my-4">{{$comic->description}}</p>
        </div>
    </section>

    <section id="specs">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 ">
                    <h2 class="font-weight-bold">Talent</h2>
                    <div class="row mr-2">
                        <span class="col-lg-3 font-weight-bold">Art by:</span>
                        <span class="col-lg-3 font-weight-bold text-primary">{{$comic->designer}}</span>  
                    </div>
                    <div class="row mr-2">                        
                        <span class="col-lg-3 font-weight-bold">Written by:</span>
                        <span class="col-lg-3 font-weight-bold text-primary">{{$comic->author}}</span>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <h2 class="font-weight-bold">Specs</h2>
                    <div class="row ml-2">
                        <span class="col-lg-3 font-weight-bold">Series:</span>
                        <span class="col-lg-3 font-weight-bold text-primary">{{$comic->serie}}</span>  
                    </div>
                    <div class="row ml-2">                        
                        <span class="col-lg-3 font-weight-bold">U.S. Price:</span>
                        <span class="col-lg-3 font-weight-bold">{{$comic->price}}</span>
                    </div>
                    <div class="row ml-2">                        
                        <span class="col-lg-3 font-weight-bold">On Sale Date:</span>
                        <span class="col-lg-3 font-weight-bold">{{$comic->created_at}}</span>
                    </div>
                    <div class="row ml-2">                        
                        <span class="col-lg-3 font-weight-bold">Volume/Issue #:</span>
                        <span class="col-lg-3 font-weight-bold">{{$comic->volume}}</span>
                    </div>
                    <div class="row ml-2">                        
                        <span class="col-lg-3 font-weight-bold">Trim Size:</span>
                        <span class="col-lg-3 font-weight-bold">{{$comic->size}}</span>
                    </div>
                    <div class="row ml-2">                        
                        <span class="col-lg-3 font-weight-bold">Page Count:</span>
                        <span class="col-lg-3 font-weight-bold">{{$comic->page_count}}</span>
                    </div>
                    <div class="row ml-2">                        
                        <span class="col-lg-3 font-weight-bold">Rated:</span>
                        <span class="col-lg-3 font-weight-bold">{{$comic->rating}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection