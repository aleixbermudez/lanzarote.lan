@extends('layout')
@section('title', 'Alta de Libro')
@vite(['resources/js/app.js'])

@section('content')

    <div class="container" style="margin-top: 40px;">
        <form method='POST' action="/libros/alta">
            @csrf
            <div class="form-group" style="margin-top: 20px;">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="anho_publicacion">Año de publicación:</label>
                <input type="text" class="form-control" id="anho_publicacion" name="anho_publicacion" placeholder="Año de publicación">
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="genero">Genero:</label>
                <select class="form-control" id="genero" name="genero">
                    <option value="">Selecciona un género...</option>

                    @foreach ($GENEROS as $clave_genero => $texto_genero)

                        <option value="{{ $clave_genero }}">{{ $texto_genero }}</option>
                    
                    @endforeach

                </select>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="editorial">Editrial:</label>
                <select class="form-control" id="editorial" name="editorial">
                    <option value="">Selecciona una editorial...</option>

                    @foreach ($EDITORIALES as $clave_editorial => $texto_editorial)

                        <option value="{{ $clave_editorial }}">{{ $texto_editorial }}</option>

                    @endforeach


                </select>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="descripcion">Descripcion:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>

            <div class="d-flex" style="margin-top: 20px;">
                <button type="submit" style="width: 200px;" class="btn btn-primary ml-auto">Enviar</button>
            </div>
            
        </form>


    </div>
@endsection