@extends('layout')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h4> Editar Pelicula</h4>

        <form action="/peliculas/{{$dato->id}}" method="POST">
            @method('PUT')
            <div class="field">
                <label class="label" for="title">Nombre</label>

                <div class="control">
                    <input class="input" type="text" name="name" value="{{$dato->name}}" id="name">
                </div>
            </div>
            <div class="field">
                <label class="genero" for="title">Genero</label>

                <div class="control">
                    <select name="genre_id" >
                        @foreach ($generos as $x)
                            <option value="{{ $x->id }}">{{ $x->name }}</option>
                        @endforeach
                    </select>


                </div>
            </div>
            <br>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Editar</button>
                </div>
            </div>
        </form>

        <form action="{{url('peliculas', [$dato->id])}}" method="POST">
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
    </div>
</div>
