@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Noticia: {{$noticias->titulonoticia}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/noticias">Back</a>            
        </div>
    </div>

        <div class="row">
            <h3>Detalles</h3>     
            <table class="table">
                <tr>
                    <td>{{$noticias->titulonoticia}}</td>
                    <td>{{$noticias->juego}}</td>
                    <td>{{$noticias->informacion}}</td>
                    <td>{{$noticias->id_noticia}}</td>
                    <td>{{$noticias->id}}</td>                    
                </tr>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
    <a class="btn btn-primary" href="/comentarios/create">comentar</a>
    </div>
        
    
@endsection

