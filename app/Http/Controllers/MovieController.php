<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Producer;
use App\Models\State;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function index()
    {
//        $type = $request->tipo_id;
        $type = 3;
        $query = DB::table('movies')
            ->select('movies.id','movies.name as pelicula','genres.id as genero_id','genres.name as genero')
            ->join('genres', 'movies.genre_id', '=', 'genres.id')
            ->get();

        $query2 = Movie::select('id','name as pelicula','genre_id','type_id','state_id','producer_id')
            ->type($type)
            ->with('genre:id,name')->with('type:id,name')->with('producer:id,company')->with('state:id,name')
            ->get();

        foreach ($query2 as $i => $v){
            $query2[$i]['genero_id'] = $v['genre_id'];
            $query2[$i]['genero']    = $v['genre']['name'];
            $query2[$i]['tipo']      = $v['type']['name'];
            $query2[$i]['estado']    = $v['state']['name'];
            $query2[$i]['productor'] = $v['producer']['company'];
            unset($query2[$i]['genre']);
            unset($query2[$i]['type']);
            unset($query2[$i]['state']);
            unset($query2[$i]['producer']);
            unset($query2[$i]['genre_id']);
            unset($query2[$i]['type_id']);
            unset($query2[$i]['state_id']);
            unset($query2[$i]['producer_id']);
        }


        return view('peliculas',[
            'peliculas' => $query2
        ]);
//        return response(array('willian' => $query->toArray(), 'diosnel' => $query2->toArray()),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::select('id','name')->get();
        $types = Type::select('id','name')->get();
        $producers = Producer::select('id','company')->get();
        $states = State::select('id','name')->get();

        return view('peliculas-crear', [
            'genre'     => $genres,
            'state'     => $states,
            'producer'  => $producers,
            'type'      => $types
        ]);
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
