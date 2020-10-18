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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('comentarios.index', [
            'comentarios' => comentarios::all()
        ]);
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
        return redirect('/comentarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_comentarios)
    {
        return view('comentarios.show', [
            'comentarios' => comentarios::findOrFail($id_comentarios),
        ]);
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
        $comentario->id_comentarios = $request->get('id_comentarios');
        $comentario->id = $request->get('id');
        $comentario->fecha = $request->get('fecha');
        $comentario->comentario = $request->get('comentario');        
        $comentario->save();

        return redirect('/comentarios');
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

        return redirect('/comentarios');
    }
    public function confirmDelete($id)
    {
        $comentario = comentarios::findOrFail($id);
        return view('comentarios.confirmDelete', [
            'comentarios' => $comentario,
        ]);
    }
}
