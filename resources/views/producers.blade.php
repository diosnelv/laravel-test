@extends('layout')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h3>Producers</h3>
        <br>
        <ul>
            @foreach ($producers as $dato)
                <li>{{ $dato->company }}</li>
            @endforeach
        </ul>

        <br>

        <a href="producers/create"> Crear</a>
    </div>
</div>
