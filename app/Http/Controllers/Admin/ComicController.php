<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::latest()->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'cover' => 'nullable | mimes:jpeg,jpg,bmp,png, | max:500'
        ]);
        

        $cover = Storage::disk('public')->put('comic_img', $request->cover);
        $validatedData['cover'] = $cover;
        Comic::create($validatedData);

        $new_comic = Comic::orderBy('id', 'desc')->first();
        return redirect()->route('admin.comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        return view('admin.comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'cover' => 'nullable | mimes:jpeg,jpg,bmp,png, | max:500'
        ]);
        
        $cover = Storage::disk('public')->put('comic_img', $request->cover);
        $validatedData['cover'] = $cover;
        
        $comic->update($validatedData);
        return redirect()->route('admin.comics.index', $comic); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return redirect()->route('admin.comics.index'); 
    }
}
