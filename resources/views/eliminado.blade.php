@extends('layout')
@section('title', 'Eliminado')

@section('content')

    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            Se ha eliminado correctamente.
        </div>

        
        <div class="d-flex">
            <a href="/libros" style="width: 200px;" class="btn btn-secondary ml-auto">Ver Libros</a>
        </div>
    </div>

@endsection