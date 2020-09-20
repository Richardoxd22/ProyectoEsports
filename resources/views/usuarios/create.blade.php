@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Nuevo Usuario</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/usuarios">Back</a>
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
                <form action="/usuarios" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id" id="id" placeholder="Escribe un id" value="{{old('id')}}"> 
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe un nombre" value="{{old('nombre')}}">   
                        <label for="correo_electronico">Correo Electronico:</label>
                        <input type="text" class="form-control" name="correo_electronico" id="correo_electronico" placeholder="Escribe un correo_electronico" value="{{old('correo_electronico')}}">   
                        <label for="telefono">Telefono:</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Escribe un telefono" value="{{old('telefono')}}">   
                        <label for="fecha_de_nacimiento">Fecha de nacimiento:</label>
                        <input type="text" class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento" placeholder="Escribe un fecha_de_nacimiento" value="{{old('fecha_de_nacimiento')}}">   
                        <label for="contrasena">Contraseña:</label>
                        <input type="text" class="form-control" name="contrasena" id="contrasena" placeholder="Escribe un contrasena" value="{{old('contrasena')}}">               
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                
                </form>
            </div>
        </div>
        
    
@endsection

