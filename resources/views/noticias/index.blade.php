@extends('layouts.base')

@section('content')
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

