@extends('layout')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h3>Estados</h3>
        <br>
        <ul>
            @foreach ($estados as $dato)
                <li>{{ $dato->name }}</li>
            @endforeach
        </ul>

        <br>

        <a href="estados/create"> Crear</a>
    </div>
</div>
