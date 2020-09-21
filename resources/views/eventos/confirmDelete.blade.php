@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Borrar Evento {{$eventos->tituloevento}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/eventos">Back</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <form action="/eventos/{{$eventos->id_eventos}}" method="POST">
                    @csrf
                    @method('delete')                   
                    <button type="submit" class="btn btn-primary">Borrar</button>                
                </form>
            </div>
        </div>            
@endsection
