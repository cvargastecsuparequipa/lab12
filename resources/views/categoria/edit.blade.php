@extends('layouts.plantillabase')
@section('contenido')
    <h2>EDITAR CATEGORIA</h2>
    <form action="/categorias/update/{{$categoria->_id}}" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{$categoria->descripcion}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
