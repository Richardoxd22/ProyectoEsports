@extends('layouts.base')

@section('content')
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Perfil</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a>
                        @endif
                    @endif
                </div>
            @endif
<div class="container">
    <div class="col">
        <h1>Comentarios</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/comentarios/create">Comentar</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach ($comentarios as $comentario)
                        <tr>
                        <td><a href="/comentarios/{{$comentario->id_comentarios}}">{{$comentario->id_comentarios}}</a></td>
                            <!-- <td><a href="/comentarios/{{$comentario->id_comentarios}}/edit">Edit</a></td> -->
                            <!-- <td><a href="/comentarios/{{$comentario->id_comentarios}}/confirmDelete">Delete</a></td> -->
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div> 
    
@endsection