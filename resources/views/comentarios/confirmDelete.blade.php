@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Borrar Comentario {{$comentarios->id_comentarios}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/comentarios">Back</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <form action="/comentarios/{{$comentarios->id_comentarios}}" method="POST">
                    @csrf
                    @method('delete')                   
                    <button type="submit" class="btn btn-primary">Borrar</button>
                
                </form>
            </div>
        </div>
        
    
@endsection
