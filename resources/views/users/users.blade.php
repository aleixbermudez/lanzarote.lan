@extends('layout')
@section('title', 'Users')

@section('content')

@php
    echo $users;
@endphp

<br><br>
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>

 
                        <th scope="row"> {{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            
                            @foreach ($user->getRoleNames() as $role)
                                <span>{{ $role }}</span>
                            @endforeach

                        </td>


                    </tr>
                @endforeach

            </tbody>
        </table>
        <br>
        <div>
            {{ $users->links() }}
        </div>
        

    </div>




@endsection