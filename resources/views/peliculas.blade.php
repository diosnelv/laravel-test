@extends('layout')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h3>Peliculas</h3>
        <br>
        <table class="table">
            <thead>
            <tr>
                <td>Pelicula</td>
                <td>Genero</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($peliculas as $dato)
            <tr>

                    <td><a href="peliculas/{{$dato->id}}/edit">{{ $dato->pelicula }}</a></td>
                    <td><a href="peliculas/{{$dato->id}}/edit">{{ $dato->genero }}</a></td>

            </tr>
            @endforeach
            </tbody>

        </table>

        <br>

        <a href="peliculas/create"> Crear</a>
    </div>
</div>
