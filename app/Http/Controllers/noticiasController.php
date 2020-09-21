<?php

namespace App\Http\Controllers;

use App\Models\noticias;
use Illuminate\Http\Request;

class noticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('noticias.index', [
            'noticias' => noticias::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        noticias::create($request->all())->save();
        return redirect('/noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('noticias.show', [
            'noticias' => noticias::findOrFail($id),
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
        $noticia = noticias::findOrFail($id);
        return view('noticias.edit', [
            'noticias' => $noticia,
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
        $noticia = noticias::findOrFail($id);
        $noticia->titulonoticia = $request->get('titulonoticia');
        $noticia->juego = $request->get('juego');
        $noticia->informacion = $request->get('informacion');
        $noticia->id_noticia = $request->get('id_noticia');
        $noticia->id = $request->get('id');        
        $noticia->save();

        return redirect('/noticias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = noticias::findOrFail($id);
        $noticia->delete();

        return redirect('/noticias');
    }
    public function confirmDelete($id)
    {
        $noticia = noticias::findOrFail($id);
        return view('noticias.confirmDelete', [
            'noticias' => $noticia,
        ]);
    }
}
