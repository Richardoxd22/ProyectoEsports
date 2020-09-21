@extends('layouts.base')

@section('content')
<div class="container">
    <div class="col">
        <h1>Usuarios</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/eventos/create">Create a new user</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach ($eventos as $evento)
                        <tr>
                        <td><a href="/eventos/{{$evento->id}}">{{$evento->tituloevento}}</a></td>
                            <td><a href="/eventos/{{$evento->id}}/edit">Edit</a></td>
                            <td><a href="/eventos/{{$evento->id}}/confirmDelete">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div> 
    
@endsection

