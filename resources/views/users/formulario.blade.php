@extends('layout')


@section('title', 'Alta de Usuario')

@section('content')


    @php

        if (session('formData'))
            $user = session('formData');

        $disabled = '';
        $boton_guardar = '<button type="submit" style="margin-top: 20px;" class="btn btn-primary">Guardar</button>';
        if (session('formData') || $oper == 'cons' || $oper == 'supr')
        {
            $disabled = 'disabled';

            if ($oper == 'supr')
                $boton_guardar = '<button type="submit" style="margin-top: 20px;"  class="btn btn-danger">Eliminar</button>';
            else
                $boton_guardar = '';
        }
            



    @endphp

    <br />

    <div class="container">
        @if(session('success'))
            <p style="text-align:center;" class="alert alert-success">{{ session('success') }}</p>
        @endif
        
        <form action="{{ route('users.almacenar') }}" method="POST">
            @csrf
            <input type="hidden" name="oper" value="{{ $oper }}" />
            <input type="hidden" name="id" value="{{ $user->id }}" />

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input {{ $disabled }} type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre',$user->nombre)}}" placeholder="Nombre">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Correo:</label>
                <input {{ $disabled }} type="text" name="email" class="form-control" id="email" value="{{ old('email',$user->email)}}" placeholder="Correo">
            </div>

            <div class="mb-3">
                <label for="contrasenha" class="form-label">Contraseña:</label>
                <input {{ $disabled }} type="password" name="contrasenha" class="form-control" id="contrasenha" value="{{ old('contrasenha',$user->contrasenha)}}" placeholder="Contraseña">
            </div>

            @foreach ($roles as $role)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $role->name }}" name="{{$role->name}}" id="{{$role->name}}">
                    <label class="form-check-label" for="flexCheckChecked">
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach



            @php

            echo $boton_guardar ;
        
            @endphp

        </form>
    </div>

@endsection