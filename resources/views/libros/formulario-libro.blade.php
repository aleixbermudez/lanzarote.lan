@extends('layout')
@section('title', 'Alta de Libro')
@vite(['resources/js/app.js'])

@section('content')

    @php 

        $disabled = 'disabled';

        if ($opt == 'view')
        {
            $boton_enviar = '<a href="/libros" style="width: 200px;" class="btn btn-primary ml-auto">Volver</a>';
        }
        else if ($opt = 'supr')
        {
            $boton_enviar = '<a href="/libros/eliminar/{$id}" style="width: 200px;" class="btn btn-danger ml-auto">Eliminar</a>';
        }
            
        
        
    @endphp


    <div class="container" style="margin-top: 40px;">
        <form method='POST' action="/libros/alta">
            @csrf
            <input type="hidden" name="opt" value="{{ $opt }}" />
            <div class="form-group" style="margin-top: 20px;">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{ old('titulo', $libro->titulo) }}" {{ $disabled }}>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="{{ old('autor', $libro->autor) }}" {{ $disabled }}>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="anho_publicacion">Año de publicación:</label>
                <input type="text" class="form-control" id="anho_publicacion" name="anho_publicacion" placeholder="Año de publicación" value="{{ old('anho_publicacion', $libro->anho_publicacion) }}" {{ $disabled }}>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="genero">Genero:</label>
                <select class="form-control" id="genero" name="genero" {{ $disabled }}>
                    <option value="">Selecciona un género...</option>

                    @foreach ($GENEROS as $clave_genero => $texto_genero)

                        @php
                            $selected = old('genero') == $clave_genero || $libro->genero == $clave_genero ? 'selected="selected"' : '';
                        @endphp

                        <option value="{{ $clave_genero }}" {{ $selected }}>{{ $texto_genero }}</option>
                    
                    @endforeach

                </select>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="editorial">Editorial:</label>
                <select class="form-control" id="editorial" name="editorial" {{ $disabled }}>
                    <option value="">Selecciona una editorial...</option>

                    @foreach ($EDITORIALES as $clave_editorial => $texto_editorial)

                        @php
                            $selected = old('editorial') == $clave_editorial || $libro->editorial == $clave_editorial ? 'selected="selected"' : '';
                        @endphp
                        
                        <option value="{{ $clave_editorial }}" {{ $selected }}>{{ $texto_editorial }}</option>

                    @endforeach


                </select>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <label for="descripcion">Descripcion:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" {{ $disabled }}>{{ old('descripcion', $libro->descripcion) }}</textarea>
            </div>

            <div class="d-flex" style="margin-top: 20px;">
                
            </div>
            
        </form>

        @php 
            echo $boton_enviar;
        @endphp


    </div>
@endsection