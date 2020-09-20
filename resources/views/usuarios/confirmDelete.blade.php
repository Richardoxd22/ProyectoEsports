@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Borrar Usuario {{$usuario->nombre}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/usuarios">Back</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <form action="/usuarios/{{$usuario->id}}" method="POST">
                    @csrf
                    @method('delete')                   
                    <button type="submit" class="btn btn-primary">Borrar</button>
                
                </form>
            </div>
        </div>
        
    
@endsection
