@extends('layouts.plantillabase')
@section('contenido')
    CATEGORIAS
    <a type="button"  href="categorias/create" class="btn btn-success m-2">Nueva Categoria </a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categorias as $categoria)
            <tr>

                <td> {{$categoria->descripcion}}</td>
                <td>{{$categoria->estado ? 'ACTIVO':'INACTIVO'}}</td>
                <td>
                    <form action="categorias/delete/{{$categoria->_id}}" method="POST">
                    <a href="categorias/{{$categoria->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
