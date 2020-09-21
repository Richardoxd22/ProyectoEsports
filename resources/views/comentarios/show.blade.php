@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Evento: {{$comentarios->id_comentarios}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/comentarios">Back</a>
        </div>
    </div>

        <div class="row">
            <h3>Detalles</h3>
            <table class="table">
                <tr>
                    <td>{{$comentarios->id_comentarios}}</td>
                    <td>{{$comentarios->id}}</td>
                    <td>{{$comentarios->fecha}}</td>
                    <td>{{$comentarios->comentario}}</td>                    
                </tr>
            </table>
        </div>
    </div>
        
    
@endsection