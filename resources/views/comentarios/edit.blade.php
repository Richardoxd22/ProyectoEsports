@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Editar Comentarios {{$comentarios->id_comentarios}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/usuarios">Back</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <form action="/comentarios/{{$comentarios->id_comentarios}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">                        
                        <label for="id_comentarios">Id Comentarios:</label>
                        <input type="text" class="form-control" name="id_comentarios" id="id_comentarios" placeholder="Escribe un id_comentarios" value="{{old('id_comentarios')}}">   
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id" id="id" placeholder="Escribe un id" value="{{old('id')}}">   
                        <label for="fecha">fecha:</label>
                        <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Escribe un fecha" value="{{old('fecha')}}">   
                        <label for="comentario">Comentario:</label>
                        <input type="text" class="form-control" name="comentario" id="comentario" placeholder="Escribe un comentario" value="{{old('fecha_de_nacimiento')}}">                           
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>                
                </form>
            </div>
        </div>
        
    
@endsection

