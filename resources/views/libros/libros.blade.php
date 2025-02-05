@extends('layout')
@section('title', 'Libros')

@section('content')

    @if(session('success'))
        <p style="text-align:center;" class="alert alert-danger">{{ session('success') }}</p>
    @endif


    <div class="container">

        <table class="table"  style="border: 1px solid darkgrey; margin-top: 40px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Editorial</th>
                <th scope="col">Autor</th>
                <th scope="col">Año de Publicacion</th>
                <th scope="col">Genero</th>
                <th scope="col">Descripción</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($libros as $libro)
                <tr>    
                    <th>{{$libro->id}}</th>
                    <th>{{$libro->titulo}}</th>
                    <th>{{$libro->editorial}}</th>
                    <th>{{$libro->autor}}</th>
                    <th>{{$libro->anho_publicacion}}</th>
                    <th>{{ $libro->genero }}</th>
                    <th>{{$libro->descripcion}}</th>
                    <th>
                        <div class="d-flex">
                            <a href="/libro/{{ $libro->id }}" class="btn btn-primary" style="margin: 2px;"><i class="bi bi-search"></i></a>
                            <a href="/libros/actualizar/{{ $libro->id }}" class="btn btn-warning" style="margin: 2px;"><i class="bi bi-pencil-square"></i></a>
                            <a href="/libros/eliminar/{{ $libro->id }}" class="btn btn-danger" style="margin: 2px;"><i class="bi bi-trash"></i></a>
                        </div>
                    </th>
                </tr>
            @endforeach
        </tbody>
        </table>

        <div class="container" style="margin-top:20px;">
            {{ $libros->links() }}
        </div>

        <div class="d-flex">
            <a href="/libros/alta" style="width: 200px; margin-top:20px" class="btn btn-success ml-auto">Añadir</a>
        </div>

    </div>



@endsection