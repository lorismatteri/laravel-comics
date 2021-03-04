<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {
        $comics = Comic::all();
        $articles = Article::all();

        return view('guests.index', compact('comics', 'articles'));
    }

}
