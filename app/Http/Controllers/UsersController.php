<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    function listado()
    {

        $users = User::paginate(7);

        return view('users.users',compact('users'));
    }


    function formulario($oper='', $id='')
    {
        $user = empty($id)? new User() : User::find($id);

        $roles = Role::all();

        return view('users.formulario',compact('user', 'roles', 'oper'));
    }

    function mostrar($id)
    {
        return $this->formulario('cons', $id);
    }


    function actualizar($id)
    {
        return $this->formulario('modi', $id);

    }

    function eliminar($id)
    {
        return $this->formulario('supr', $id);

    }

    function alta()
    {
        return $this->formulario();
    }

    function almacenar(Request $request)
    {

        if ($request->oper == 'supr')
        {

            $user = User::find($request->id);
            $user->delete();

            $salida = redirect()->route('user.listado');
        }
        else
        {

            
            $validatedData = $request->validate([
                'nombre'         => 'required|string|max:255',
                'email'          => 'required|string|max:255',
                'contrasenha'    => 'required|integer',
                'role'           => 'required',
            ]);

        

            $user = empty($request->id)? new User() : User::find($request->id);

            $user->nombre      = $request->nombre;
            $user->email       = $request->email;
            $user->contrasenha = $request->contrasenha;
            
            $roles = Role::all();
            foreach ($roles as $role) {
                if($request->$role) {
                    $user->assignRole($role);
                }
            }

            $user->save();


            $salida = redirect()->route('users.alta')->with([
                    'success'  => 'user insertado correctamente.'
                    ,'formData' => $user
                ]
            );

        }

        return $salida;
    }

}