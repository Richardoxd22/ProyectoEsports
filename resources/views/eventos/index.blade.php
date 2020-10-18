@extends('layouts.base')

@section('content')
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Perfil</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Ingresar </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a>
                        @endif
                    @endif
                </div>
            @endif
<div class="container">
    <div class="col">
        <h1>Evento</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/eventos/create">Crear Evento</a><a class="btn btn-primary" href="/noticias">Noticias</a>
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

