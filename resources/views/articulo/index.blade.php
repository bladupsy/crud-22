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
            <tr>
           <th scope="row">
            <td>{{ $articulo->id}} </td>
            <td>{{ $articulo->codigo}} </td>
            <td>{{$articulo->descripcion}} </td>
            <td>{{$articulo->cantidad}} </td>
            <td>{{ $articulo->precio}} </td>
            <td>
            
            <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
            <form action="{{ action ('ArticuloController@destroy', $articulo->id)}}" method="POST"> 
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger " value="Eliminar">
                </form> 
             </td>
             </th>
             </tr>

        @endforeach
    </tbody>


</table>
@endsection
