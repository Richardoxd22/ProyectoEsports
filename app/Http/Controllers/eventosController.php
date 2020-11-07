<?php

namespace App\Http\Controllers;

use App\Models\eventos;
use Illuminate\Http\Request;

class eventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return json_encode(eventos::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        eventos::create($request->all())->save();
        return json_encode($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_eventos)
    {
        return eventos::findOrFail($id_eventos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventos = eventos::findOrFail($id);
        return view('eventos.edit', [
            'eventos' => $eventos,
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
        $eventos = eventos::findOrFail($id);

        $eventos->tituloevento = $request->get('tituloevento');
        $eventos->juegotorneo = $request->get('juegotorneo');
        $eventos->informaciontorneo = $request->get('informaciontorneo');
        $eventos->discord = $request->get('discord');
        $eventos->id = $request->get('id');
        $eventos->save();

        return json_encode($eventos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos = eventos::findOrFail($id);
        $eventos->delete();

        return
            response('Success Delete', 200)
            ->header('Content-Type', 'text/plain');
    }
    public function confirmDelete($id)
    {

        $eventos = eventos::findOrFail($id);
        return view('eventos.confirmDelete', [
            'eventos' => $eventos,
        ]);
    }
}
