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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('eventos.index', [
            'eventos' => eventos::all()
        ]);
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
        return redirect('/eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_eventos)
    {
        return view('eventos.show', [
            'eventos' => eventos::findOrFail($id_eventos),
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
        $eventos->id_eventos = $request->get('id_eventos');
        $eventos->tituloevento = $request->get('titutloevento');
        $eventos->juegotorneo = $request->get('juegotorneo');
        $eventos->informaciontorneo = $request->get('informaciontorneo');
        $eventos->discord = $request->get('discord');
        $eventos->id = $request->get('id');
        $eventos->save();

        return redirect('/eventos');
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

        return redirect('/eventos');        
    }
    public function confirmDelete($id)
    {
        
        $eventos = eventos::findOrFail($id);
        return view('eventos.confirmDelete', [
            'eventos' => $eventos,
        ]);

    }
}
