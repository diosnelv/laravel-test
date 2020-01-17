@extends('layout')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h3>Géneros</h3>
        <br>
        <ul>
            @foreach ($generos as $dato)
                <li><a href="generos/{{$dato->id}}/edit">{{ $dato->name }}</a></li>
            @endforeach
        </ul>

        <br>

        <a href="generos/create"> Crear</a>
    </div>
</div>
