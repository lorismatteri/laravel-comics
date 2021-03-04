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
        $comics = Comic::all();
        $articles = Article::all();
        $series = Serie::all();

        return view('guests.index', compact('comics', 'articles', 'series'));
    }

}
