<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personas;
use App\actividades_laborales;
use App\salud;
use App\discapacidades;
use App\familias;
use App\sectores;
use App\viviendas;
use App\refugios;
use Illuminate\Routing\Route;
use Session;
use Redirect;

class FamiliasController extends Controller
{
    
    public function listing(){
        $familias = familias::all();

        return response()->json(
            $familias->toArray()    
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = personas::pluck('nombres', 'id');
        $actividades_laborales = actividades_laborales::pluck('actividad_laboral', 'id');
        $discapacidades = discapacidades::pluck('tipo_discapacidad', 'id');
        $refugios = refugios::pluck('nombre_contacto', 'id');
        $sectores = sectores::pluck('sector', 'id');

        return view('familias.create',compact('personas','actividades_laborales','discapacidades','refugios','sectores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
