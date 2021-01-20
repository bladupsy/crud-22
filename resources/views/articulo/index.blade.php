@extends('layouts.plantillabase');

@section('contenido')
<a href="articulos/create" class="btn btn-danger">Crear</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidades</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>

        </tr>

    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
            <td>{{ $articulo->id}} </td>
            <td>{{ $articulo->codigo}} </td>
            <td>{{$articulo->descripcion}} </td>
            <td>{{$articulo->cantidad}} </td>
            <td>{{ $articulo->precio}} </td>
            <td>
                <a class="btn btn-info">Editar</a>
                <a class="btn btn-danger">Borrar</a>
             </td>

        @endforeach
    </tbody>


</table>
@endsection
