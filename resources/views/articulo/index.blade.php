@extends('layouts.plantillabase');

@section('contenido')
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="articulos/create" class="btn btn-danger ">Crear</a>
</div>
<table class="table table-striped table-hover mt-4">
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
         
            <td>{{ $articulo->id}} </td>
            <td>{{ $articulo->codigo}} </td>
            <td>{{$articulo->descripcion}} </td>
            <td>{{$articulo->cantidad}} </td>
            <td>{{ $articulo->precio}} </td>
            <td>
            
            <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
           
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger " value="Eliminar">Borrar</button>
                
             </td>
             </th>
             </tr>

        @endforeach
    </tbody>


</table>
@endsection
