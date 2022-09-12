<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use App\Http\Requests\StoreMembresRequest;
use App\Http\Requests\UpdateMembresRequest;
use App\Models\Genres;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MembresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membres::all();
        return view ('pages.membres.index',compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genres::all();
        return view('pages.membres.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMembresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membres= new Membres;
        $membres->nom = $request->nom;
        $membres->age = $request->age;

        Storage::put('public/img/', $request->file('img'));
        $membres->img= $request->file('img')->hashName();

        $membres->genre_id= $request->genre_id;

        $membres->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membres = Membres::find($id);
        return view('pages.membres.show', compact('membres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membres = Membres::find($id);
        $genres = Genres::find($id);
        return view('pages.membres.edit', compact('membres','genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembresRequest  $request
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $membres = Membres::find($id);

        if($request->file('img') != null){
            Storage::delete('public/img/', $request->img);
            Storage::put('public/img/', $request->file('img'));
            $membres->img= $request->file('img')->hashName();
            $membres->save();
            return redirect()->back();
        }
        $membres->nom = $request->nom;
        $membres->age = $request->age;
        $membres->genre_id= $request->genre_id;
        $membres->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membres $membres, $id)
    {
        $membres = Membres::find($id);
        Storage::delete('public/img/' . $membres->img);
        // $membres->delete();
        return redirect()->back();
    }
}
