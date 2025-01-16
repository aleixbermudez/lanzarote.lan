@extends('layout')
@section('title', 'Libros')

@section('content')


    <div class="container">

        <table class="table"  style="border: 1px solid darkgrey; margin-top: 40px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
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
                    <th>{{$libro->autor}}</th>
                    <th>{{$libro->anho_publicacion}}</th>
                    <th>{{$libro->genero}}</th>
                    <th>{{$libro->descripcion}}</th>
                    <th>
                        <div class="d-flex">
                            <button type="button" class="btn"><a href="/libros/eliminar/{{$libro->id}}">❌</a></button>
                            <button type="button" class="btn"><a href="/libros/actualizar/{{$libro->id}}">⚙️</a></button>
                        </div>
                    </th>
                </tr>
            @endforeach
        </tbody>
        </table>

        <div class="d-flex">
            <a href="/libros/alta" style="width: 200px;" class="btn btn-secondary ml-auto">Añadir</a>
        </div>

    </div>

@endsection