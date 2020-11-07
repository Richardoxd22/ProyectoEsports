<?php

namespace App\Http\Controllers;

use App\Models\comentarios;
use Illuminate\Http\Request;

class comentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return json_encode(comentarios::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comentarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        comentarios::create($request->all())->save();
        return json_encode($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_comentarios)
    {
        return json_encode(comentarios::findOrFail($id_comentarios));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentario = comentarios::findOrFail($id);
        return view('comentarios.edit', [
            'comentarios' => $comentario,
        ]);
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
        $comentario = comentarios::findOrFail($id);
        $comentario->id = $request->get('id');
        $comentario->fecha = $request->get('fecha');
        $comentario->comentario = $request->get('comentario');
        $comentario->save();

        return json_encode($comentario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentario = comentarios::findOrFail($id);
        $comentario->delete();

        return response('Success Delete', 200)
            ->header('Content-Type', 'text/plain');
    }
    public function confirmDelete($id)
    {
        $comentario = comentarios::findOrFail($id);
        return view('comentarios.confirmDelete', [
            'comentarios' => $comentario,
        ]);
    }
}
