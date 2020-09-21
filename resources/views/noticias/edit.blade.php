@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Editar Noticia {{$noticias->titulonoticia}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/noticias">Back</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <form action="/noticias/{{$noticias->id_noticia}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="titulonoticia">Titulo Noticia:</label>
                        <input type="text" class="form-control" name="titulonoticia" id="titulonoticia" placeholder="Escribe un titulonoticia" value="{{old('titulonoticia')}}"> 
                        <label for="juego">Juego:</label>
                        <input type="text" class="form-control" name="juego" id="juego" placeholder="Escribe un juego" value="{{old('juego')}}">   
                        <label for="informacion">Informacion:</label>
                        <input type="text" class="form-control" name="informacion" id="informacion" placeholder="Escribe un informacion" value="{{old('informacion')}}">   
                        <label for="id_noticia">ID Noticia:</label>
                        <input type="text" class="form-control" name="id_noticia" id="id_noticia" placeholder="Escribe un id_noticia" value="{{old('id_noticia')}}">   
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id" id="id" placeholder="Escribe un id" value="{{old('id')}}">                           
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                
                </form>
            </div>
        </div>
        
    
@endsection

