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
        return json_encode(noticias::all());
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
        return json_encode(noticias::findOrFail($id));
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
        $noticia->id = $request->get('id');
        $noticia->save();

        return json_encode($noticia);
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

        return
            response('Success Delete', 200)
            ->header('Content-Type', 'text/plain');
    }
    public function confirmDelete($id)
    {
        $noticia = noticias::findOrFail($id);
        return view('noticias.confirmDelete', [
            'noticias' => $noticia,
        ]);
    }
}
