<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Libro;


class LibrosController extends Controller
{
    function procesar(Request $request)
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
        
        if ($validator->fails()) 
        {
        
            return response()->json([
                'message' => 'Los datos introducidos no son válidos',
                'errors' => $validator->errors()
            ], 422);

        } 
        else 
        {

            $libros = Libro::all();
            $repetido = 0;
            $salida = '';

            foreach ($libros as $libro) 
            {
                if ($request->titulo == $libro->titulo) 
                {
                    $repetido += 1;
                }
            }

            if ($repetido == 0) 
            {

                $modelo = new Libro;
                $modelo->titulo = $request->titulo;
                $modelo->editorial = $request->editorial;
                $modelo->autor = $request->autor;
                $modelo->anho_publicacion = $request->anho_publicacion;
                $modelo->genero = $request->genero;
                $modelo->descripcion = $request->descripcion;
                $modelo->save();
    
                $salida = 'enviado';
            } 
            else 
            {
                $salida = 'error';
            }

            return view('libros.libros',compact('libros'));

        }
        
    }

    function formulario($opt='',$id)
    {
        $GENEROS        = Libro::GENEROS;
        $EDITORIALES    = Libro::EDITORIALES;

        $libro = Libro::find($id);

        return view('libros.formulario-libro',compact('GENEROS', 'EDITORIALES', 'libro', 'opt'));
    }

    function mostrar_libros()
    {
        $libros = Libro::paginate(7);
        return view('libros.libros',compact('libros'));
    }


    function eliminar($id) 
    {
        return $this->formulario('supr', $id);

    }

    function observar($id)
    {
        return $this->formulario('view', $id);
    }

}