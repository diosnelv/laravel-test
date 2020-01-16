@extends('layout')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h3>Estados</h3>
        <br>
        <ul>
            @foreach ($estados as $dato)
                <li><a href="estados/{{$dato->id}}/edit">{{ $dato->name }}</a></li>
            @endforeach
        </ul>

        <br>

        <a href="estados/create"> Crear</a>
    </div>
</div>
