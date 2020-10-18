@extends('layouts.base')

@section('content')
    <div class="col">
        <h1><p style="color:#FF0000";>Para poder borrar el evento "{{$eventos->tituloevento}}"</h1></p> 
        <h2><p style="color:#191970";> Contactarse con: Christian Chavez N° 0979098791 o Richard Santillán N° 0984004786</h2></p>
    <body> 
  
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
                                   
                </form>
            </div>
        </div>            
@endsection
