<?php

namespace App\Http\Controllers;

use App\Models\usuario2;
use Illuminate\Http\Request;

class usuario2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(usuario2::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        usuario2::create($request->all())->save();
        return json_encode($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return json_encode(usuario2::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = usuario2::findOrFail($id);
        $usuario->nombre = $request->get('nombre');
        $usuario->correo_electronico = $request->get('correo_electronico');
        $usuario->telefono = $request->get('telefono');
        $usuario->fecha_de_nacimiento = $request->get('fecha_de_nacimiento');
        $usuario->contrasena = $request->get('contrasena');

        $usuario->save();

        return json_encode($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = usuario2::findOrFail($id);
        $usuario->delete();

        return response('Success Delete', 200)
            ->header('Content-Type', 'text/plain');
    }
}
