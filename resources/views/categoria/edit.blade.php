@extends('layouts.plantillabase')
@section('contenido')
    <h2>EDITAR CATEGORIA</h2>
<<<<<<< HEAD
    <form action="/categorias/update/{{$categoria->_id}}" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{$categoria->descripcion}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
=======
    <form action="/categorias/update/{{ $categoria->_id }}" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Descripcion</label>
            <input type=text" class="form-control" name="descripcion" value="{{$categoria->descripcion}}" >
        </div>
        <div class="mb-3">
            <label " class="form-label">Alias</label>
            <input type=text" class="form-control" name="alias"  value="{{$categoria->alias}}"  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Stock</label>
            <input type=text" class="form-control" name="stock"  value="{{$categoria->stock}}" >
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
>>>>>>> 60d728f4f0a521ea367007fcddd72a2ea8226f5d
    </form>
@endsection
