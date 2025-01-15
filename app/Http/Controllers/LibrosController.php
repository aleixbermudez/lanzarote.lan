<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Libro;


class LibrosController extends Controller
{
    function procesar_formulario(Request $request)
    {
        $data = [
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'anho_publicacion' => $request->anho_publicacion,
            'genero' => $request->genero,
            'descripcion' => $request->descripcion,
        ];
        
        $rules = [
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'anho_publicacion' => 'required|int',
            'genero' => 'required',
            'descripcion' => 'required'
        ];
        $validator = Validator::make($data, $rules);
        
        if ($validator->fails()) {
        
            return response()->json([
                'message' => 'Los datos no son válidos',
                'errors' => $validator->errors()
            ], 422);

        } else {
            $modelo = new Libro;
            $modelo->titulo = $request->titulo;
            $modelo->autor = $request->autor;
            $modelo->anho_publicacion = $request->anho_publicacion;
            $modelo->genero = $request->genero;
            $modelo->descripcion = $request->descripcion;
            $modelo->save();

            return view('enviado');
        }
        
    }

    function mostrar_formulario()
    {
        return view('alta-libros');
    }

    function mostrar_libros()
    {
        $libros = Libro::all();
        return view('libros',compact('libros'));
    }
}