<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Http\Requests\StoreGenresRequest;
use App\Http\Requests\UpdateGenresRequest;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genres::all();
        return view('pages.genres.index',compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre = new Genres;
        $genre->genre = $request->genre;
        $genre->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genres::find($id);
        return view('pages.genres.show',compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genres::find($id);
        return view('pages.genres.edit',compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenresRequest  $request
     * @param  \App\Models\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genre = Genres::find($id);
        $genre->genre = $request->genre;
        $genre->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genres $genres)
    {
        //
    }
}
