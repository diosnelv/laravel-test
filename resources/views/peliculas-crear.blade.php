@extends('layout')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h4> Nueva Pelicula</h4>

        <form action="/peliculas" method="POST">
            <div class="field">
                <label class="label" for="title">Nombre</label>

                <div class="control">
                    <input class="input" type="text" name="name" id="name">
                </div>
            </div>
            <div class="field">
                <label class="genero" for="title">Genero</label>

                <div class="control">
                    <select name="genre_id" >
                        @foreach ($genero as $dato)
                            <option value="{{ $dato->id }}">{{ $dato->name }}</option>
                        @endforeach
                    </select>


                </div>
            </div>
            <div class="field">
                <label class="genero" for="title">Productor</label>

                <div class="control">
                    <select name="producer_id" >
                            <option value="1">Marvel</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <label class="tipo" for="title">Tipo</label>

                <div class="control">
                    <select name="type_id" >
                        <option value="1">Peliculas</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </div>
</div>
