@extends('layout')
@section('title', 'Error')

@section('content')

    <div class="container mt-5">
        <div class="alert alert-danger" role="alert">
            Ha habido un erorr!
        </div>

        
        <div class="d-flex">
            <a href="/libros" style="width: 200px;" class="btn btn-secondary ml-auto">Ver Libros</a>
        </div>
    </div>

@endsection