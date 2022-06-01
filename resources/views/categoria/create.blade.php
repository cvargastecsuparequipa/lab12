@extends('layouts.plantillabase')
@section('contenido')
    <h2>CREAR CATEGORIA</h2>
    <form action="/categorias/insert" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" >
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
