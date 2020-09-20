@extends('layouts.base')

@section('content')
    <div class="col">
        <h1>Usuario: {{$usuario->nombre}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/usuarios">Back</a>
        </div>
    </div>

        <div class="row">
            <h3>Detalles</h3>
            <table class="table">
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->correo_electronico}}</td>
                    <td>{{$usuario->telefono}}</td>
                    <td>{{$usuario->fecha_de_nacimiento}}</td>
                    <td>{{$usuario->contrasena}}</td>
                </tr>
            </table>
        </div>
    </div>
        
    
@endsection

