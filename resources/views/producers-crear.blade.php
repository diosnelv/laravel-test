@extends('layout')

<div class="flex-center position-ref full-height">
    <div class="content">
        <h4> Nuevo Producer</h4>

        <form action="/producers" method="POST">
            <div class="field">
                <label class="label" for="title">Company</label>

                <div class="control">
                    <input class="input" type="text" name="company" id="company">
                </div>

                <label class="label" for="title">Description</label>

                <div class="control">
                    <textarea class="input" type="text" name="description" id="description"></textarea>
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
