@extends('layouts.base')

@section('content')
<div class="container">
    <div class="col">
        <h1>Comentarios</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/comentarios/create">Create a new user</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach ($comentarios as $comentario)
                        <tr>
                        <td><a href="/comentarios/{{$comentario->id_comentarios}}">{{$comentario->id_comentarios}}</a></td>
                            <td><a href="/comentarios/{{$comentario->id_comentarios}}/edit">Edit</a></td>
                            <td><a href="/comentarios/{{$comentario->id_comentarios}}/confirmDelete">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div> 
    
@endsection