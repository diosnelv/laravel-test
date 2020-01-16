@extends('welcome')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h4> Nuevo tipo</h4>

        <form action="/types" method="POST">
            <div class="field">
                <label class="label" for="title">Nombre</label>

                <div class="control">
                    <input class="input" type="text" name="name" id="name">
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
