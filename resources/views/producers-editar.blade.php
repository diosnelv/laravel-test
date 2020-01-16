@extends('layout')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h4> Editar producer</h4>

        <form action="/producers/{{$dato->id}}" method="POST">
            @method('PUT')
            <div class="field">
                <label class="label" for="title">Company</label>

                <div class="control">
                    <input class="input" type="text" name="company" value="{{$dato->company}}" id="company">
                </div>

                <label class="label" for="title">Description</label>

                <div class="control">
                    <input class="input" type="text" name="description" value="{{$dato->description}}" id="description">
                </div>
            </div>
            <br>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Editar</button>
                </div>
            </div>
        </form>

        <form action="{{url('generos', [$dato->id])}}" method="POST">
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
    </div>
</div>
