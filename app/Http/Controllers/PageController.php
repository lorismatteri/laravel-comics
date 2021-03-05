<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Article;
use App\Serie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {
        return view('guests.home');
    }

    public function comics()
    {
        $comics = Comic::all();
        $articles = Article::all();
        $series = Serie::all();

        return view('guests.comics.index', compact('comics', 'articles', 'series'));
    }
    
    public function show(Comic $comic)
    {
        
        return view('guests.comics.show', compact('comic'));
    }
}
