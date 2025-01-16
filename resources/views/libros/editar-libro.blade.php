@extends('layout')
@section('title', 'Actualizar Libro')

@section('content')
    <div class="container" style="margin-top: 40px;">
        <form method='POST' action="/libros/modificar/{$libro->id}">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{$libro->titulo}}">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="{{$libro->autor}}">
            </div>
            <div class="form-group">
                <label for="anho_publicacion">Año de publicación:</label>
                <input type="text" class="form-control" id="anho_publicacion" name="anho_publicacion" placeholder="Año de publicación" value="{{$libro->anho_publicacion}}">
            </div>
            <div class="form-group">
                <label for="genero">Genero:</label>
                <select class="form-control" id="genero" name="genero" value="{{$libro->genero}}">
                <option value="Accion" {{ $libro->genero == 'Accion' ? 'selected' : '' }}>Acción</option>
                <option value="Comedia" {{ $libro->genero == 'Comedia' ? 'selected' : '' }}>Comedia</option>
                <option value="Misterio" {{ $libro->genero == 'Misterio' ? 'selected' : '' }}>Misterio</option>
                <option value="Romance" {{ $libro->genero == 'Romance' ? 'selected' : '' }}>Romance</option>
                <option value="Fantasia" {{ $libro->genero == 'Fantasia' ? 'selected' : '' }}>Fantasía</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{$libro->descripcion}}</textarea>
            </div>

            <div class="d-flex">
                <button type="submit" style="width: 200px;" class="btn btn-secondary ml-auto">Actualizar</button>
            </div>
            
        </form>
    </div>
@endsection