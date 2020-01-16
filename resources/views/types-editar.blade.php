@extends('welcome')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h4> Editar tipo</h4>

        <form action="/types/{{$dato->id}}" method="POST">
            @method('PUT')
            <div class="field">
                <label class="label" for="title">Nombre</label>

                <div class="control">
                    <input class="input" type="text" name="name" value="{{$dato->name}}" id="name">
                </div>
            </div>
            <br>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Editar</button>
                </div>
            </div>
        </form>

        <form action="{{url('types', [$dato->id])}}" method="POST">
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
    </div>
</div>
