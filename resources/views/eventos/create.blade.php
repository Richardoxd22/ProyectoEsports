@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Nuevo Eventos</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/eventos">Back</a>
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
                <form action="/eventos" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_eventos">ID Eventos:</label>
                        <input type="text" class="form-control" name="id_eventos" id="id_eventos" placeholder="Escribe un id_eventos" value="{{old('id_eventos')}}"> 
                        <label for="tituloevento">Titulo Evento:</label>
                        <input type="text" class="form-control" name="tituloevento" id="tituloevento" placeholder="Escribe un tituloevento" value="{{old('tituloevento')}}">   
                        <label for="juegotorneo">Juego Torneo:</label>
                        <input type="text" class="form-control" name="juegotorneo" id="juegotorneo" placeholder="Escribe un juegotorneo" value="{{old('juegotorneo')}}">   
                        <label for="informaciontorneo">Informacion:</label>
                        <input type="text" class="form-control" name="informaciontorneo" id="informaciontorneo" placeholder="Escribe un informaciontorneo" value="{{old('informaciontorneo')}}">   
                        <label for="discord">Discord:</label>
                        <input type="text" class="form-control" name="discord" id="discord" placeholder="Escribe un discord" value="{{old('discord')}}">   
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id" id="id" placeholder="Escribe un id" value="{{old('id')}}">               
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                
                </form>
            </div>
        </div>
        
    
@endsection

