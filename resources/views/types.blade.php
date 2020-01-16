@extends('welcome')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h3>Types</h3>
        <br>
        <ul>
            @foreach ($types as $dato)
                <li><a href="types/{{$dato->id}}/edit">{{ $dato->name }}</a></li>
            @endforeach
        </ul>

        <br>

        <a href="types/create"> Crear</a>
    </div>
</div>
