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
            'editorial' => $request->editorial,
            'autor' => $request->autor,
            'anho_publicacion' => $request->anho_publicacion,
            'genero' => $request->genero,
            'descripcion' => $request->descripcion,
        ];
        
        $rules = [
            'titulo' => 'required|string|max:255',
            'editorial' => 'required',
            'autor' => 'required|string|max:255',
            'anho_publicacion' => 'required|int',
            'genero' => 'required',
            'descripcion' => 'required'
        ];
        $validator = Validator::make($data, $rules);
        
        if ($validator->fails()) {
        
            return response()->json([
                'message' => 'Los datos introducidos no son válidos',
                'errors' => $validator->errors()
            ], 422);

        } else {

            $libros = Libro::all();
            $repetido = 0;
            $salida = '';

            foreach ($libros as $libro) {
                if ($request->titulo == $libro->titulo) {
                    $repetido += 1;
                }
            }

            if ($repetido == 0) {

                $modelo = new Libro;
                $modelo->titulo = $request->titulo;
                $modelo->editorial = $request->editorial;
                $modelo->autor = $request->autor;
                $modelo->anho_publicacion = $request->anho_publicacion;
                $modelo->genero = $request->genero;
                $modelo->descripcion = $request->descripcion;
                $modelo->save();
    
                $salida = 'enviado';
            } else {
                $salida = 'error';
            }

            return view($salida);

        }
        
    }

    function mostrar_formulario()
    {
        return view('libros.alta-libros');
    }

    function mostrar_libros()
    {
        $libros = Libro::all();
        return view('libros.libros',compact('libros'));
    }


    function eliminar_libro($id) {

        $libro = Libro::find($id);
        $salida = '';

        if ($libro) {
            $libro->delete();
            $salida = 'eliminado';
        } else {
            $salida = 'error';
        }

        return view($salida);

    }

    function actualizar_libro($id) {

        $libro = Libro::find($id);
        return view('libros.editar-libro', compact('libro'));

    }

    function procesar_actualizar_libro(Request $request) {

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

            $libro = Libro::find($id);

            $libro->titulo = $request->titulo;
            $libro->autor = $request->autor;
            $libro->anho_publicacion = $request->anho_publicacion;
            $libro->genero = $request->genero;
            $libro->descripcion = $request->descripcion;

            $libro->save();

            return view('enviado');

        }

    }



}