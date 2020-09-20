@extends('layouts.base')

@section('content')
<div class="container">
    <div class="col">
        <h1>Usuarios</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/usuarios/create">Create a new user</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach ($usuarios as $usuario)
                        <tr>
                        <td><a href="/usuarios/{{$usuario->id}}">{{$usuario->nombre}}</a></td>
                            <td><a href="/usuarios/{{$usuario->id}}/edit">Edit</a></td>
                            <td><a href="/usuarios/{{$usuario->id}}/confirmDelete">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div> 
    
@endsection

