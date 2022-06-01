@extends('layouts.plantillabase')
@section('contenido')
    CATEGORIAS
<<<<<<< HEAD
    <a type="button"  href="categorias/create" class="btn btn-success m-2">Nueva Categoria </a>
=======
    <a href="categorias/create" type="button" class="btn btn-success">Nueva Categoria</a>
>>>>>>> 60d728f4f0a521ea367007fcddd72a2ea8226f5d
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Descripcion</th>
<<<<<<< HEAD
=======
            <th scope="col">Stock</th>
            <th scope="col">Alias</th>
>>>>>>> 60d728f4f0a521ea367007fcddd72a2ea8226f5d
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
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
=======

        @foreach($categorias as $categoria )
            <tr>
                <td> {{$categoria->descripcion}}</td>
                <td> {{$categoria->stock}} </td>
                <td>{{$categoria->alias}}</td>
                <td>{{$categoria->estado}}</td>
                <td><a href="categorias/{{$categoria->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
               <button type="button" class="btn btn-danger">Eliminar</button></td>
>>>>>>> 60d728f4f0a521ea367007fcddd72a2ea8226f5d
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
