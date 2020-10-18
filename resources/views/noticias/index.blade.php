@extends('layouts.base')

@section('content')
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
<div class="container">
    <div class="col">
        <h1>Noticias</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/noticias/create">Create a new notice</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach ($noticias as $noticia)
                        <tr>
                        <td><a href="/noticias/{{$noticia->id_noticia}}">{{$noticia->titulonoticia}}</a></td>
                            <td><a href="/noticias/{{$noticia->id_noticia}}/edit">Edit</a></td>
                            <td><a href="/noticias/{{$noticia->id_noticia}}/confirmDelete">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div> 
    
@endsection

