@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Eventos: {{$eventos->tituloevento}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/eventos">Back</a>
        </div>
    </div>

        <div class="row">
            <h3>Detalles</h3>
            <table class="table">
                <tr>
                    <td>{{$eventos->id_eventos}}</td>
                    <td>{{$eventos->tituloevento}}</td>
                    <td>{{$eventos->juegotorneo}}</td>
                    <td>{{$eventos->informaciontorneo}}</td>
                    <td>{{$eventos->discord}}</td>
                    <td>{{$eventos->id}}</td>
                </tr>
            </table>
        </div>
    </div>
        
    
@endsection

