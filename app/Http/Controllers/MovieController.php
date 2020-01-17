<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $query = DB::table('movies')
            ->join('genres', 'movies.genre_id', '=', 'genres.id')
            ->select('movies.id','movies.name as pelicula','genres.id as genero_id','genres.name as genero')
            ->get();
        return view('peliculas',[
            'peliculas' => $query
        ]);
//        return response($query->toArray(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $state = Genre::select('id','name')->get();
        return view('peliculas-crear', ['genero' => $state]);
//        return view('peliculas-crear');

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
        $newModel = new Movie();
        $newModel->name = $request->name;
        $newModel->genre_id = $request->genre_id;
        $newModel->producer_id = $request->producer_id;
        $newModel->type_id = $request->type_id;
        $newModel->save();

        return redirect('peliculas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $query = DB::table('movies')
            ->join('genres', 'movies.genre_id', '=', 'genres.id')
            ->select('movies.id','movies.name as pelicula','genres.id as genero_id','genres.name as genero')
            ->where('movies.id', '=', '$id')
            ->get();
        return response($query->toArray(),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $query = DB::table('movies')
            ->select('movies.id','movies.name','movies.genre_id')
            ->find($id);
        $generos = DB::table('genres')
            ->select('genres.id','genres.name')
            ->get();
        return view('peliculas-editar',['dato' => $query ,'generos' => $generos ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $old = Movie::select('id','name','genre_id')->find($id);
        $old->name = $request->name;
        $old->genre_id = $request->genre_id;
        $old->save();

//        return response($old->toArray(),200);
        return redirect('peliculas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Movie::destroy($id);
        return redirect('peliculas');
    }
}
