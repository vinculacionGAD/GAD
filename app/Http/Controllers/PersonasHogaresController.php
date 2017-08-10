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
use App\personas_hogares;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;
class PersonasHogaresController extends Controller
{
    
    public function listing(){
        $personas_hogares = personas_hogares::all();

        return response()->json(
            $personas_hogares->toArray()    
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
        //$personas = personas::pluck('nombres', 'id');
        $personas = DB::select("select id,concat(nombres,' ',apellido_paterno,' ',apellido_materno) as persona from personas");
        $actividades_laborales = actividades_laborales::pluck('actividad_laboral', 'id');
        $discapacidades = discapacidades::pluck('tipo_discapacidad', 'id');
        $refugios = refugios::pluck('nombre_contacto', 'id');
        $sectores = sectores::pluck('sector', 'id');
        //$familias = familias::pluck('id', 'id');
        //$familias = DB::table('familias')->where('jefe_hogar', 'S')->pluck('id','id');
        $familias = DB::select("SELECT familias.id, concat(personas.nombres,' ',personas.apellido_paterno,' ',personas.apellido_materno) AS jefe_hogar FROM personas, personas_hogares, familias WHERE familias.persona_hogar_id = personas_hogares.id AND personas_hogares.persona_id = personas.id AND familias.jefe_hogar = 'S'");
        //return $familias;
        return view('personasHogares.create',compact('personas','actividades_laborales','discapacidades','refugios','sectores','familias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      salud::create($request->all());

      $idSal = "";
        $idSalud = DB::select("SELECT MAX(id) as idSalu FROM saluds");
        foreach ($idSalud as $idSa ) {
            $idSal=$idSa->idSalu;
        }

      personas_hogares::create([
        'salud_id'=>$idSal,
            'parentesco'=>$request['parentesco'],
            'persona_id'=>$request['persona_id'],
            'trabaja_si_no'=>$request['trabaja_si_no'],
            'actividad_laboral_id'=>$request['actividad_laboral_id'],
        ]); 

 
        $idJefe = "N";

        $idViv = "";
        $idVivienda = DB::select("SELECT vivienda_id as idVivi FROM familias where familias.id = ?",[$request->input('persona_hogar_id')]);

        foreach ($idVivienda as $idVi ) {
            $idViv=$idVi->idVivi;
        }

         familias::create([
            'persona_hogar_id'=>$request['persona_hogar_id'],
            'vivienda_id'=>$idViv,
            'sector_id'=>$request->input('sector_id'),
            //'refugio_id'=>$request->input('refugio_id'),
            'jefe_hogar'=>$idJefe,
            ]);

        return response()->json([
            "mensaje" => "creado"
            ]);
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
