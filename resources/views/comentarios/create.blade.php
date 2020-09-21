@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Nuevo Comentario</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/comentarios">Back</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>                  
                @endif
                <form action="/comentarios" method="POST">
                    @csrf
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

