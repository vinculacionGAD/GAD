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
use Storage;
use Hash;
use Response;

class FamiliasController extends Controller
{
    
    public function listing(){
        $familias = DB::select('SELECT personas.nombres, personas.apellido_paterno, personas.apellido_materno, personas_hogares.parentesco, TIMESTAMPDIFF(YEAR,personas.fecha_nacimiento,CURRENT_DATE) as edad, familias.jefe_hogar, familias.vivienda_id, sectores.sector, comunidades.comunidad FROM personas, personas_hogares, familias, sectores, comunidades WHERE personas_hogares.persona_id = personas.id AND familias.persona_hogar_id = personas_hogares.id AND familias.sector_id = sectores.id AND sectores.comunidad_id = comunidades.id ORDER BY familias.vivienda_id ASC');

        return $familias;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familias = DB::select('SELECT personas.nombres, personas.apellido_paterno, personas.apellido_materno, personas_hogares.parentesco, TIMESTAMPDIFF(YEAR,personas.fecha_nacimiento,CURRENT_DATE) as edad, familias.jefe_hogar, familias.vivienda_id, sectores.sector, comunidades.comunidad FROM personas, personas_hogares, familias, sectores, comunidades WHERE personas_hogares.persona_id = personas.id AND familias.persona_hogar_id = personas_hogares.id AND familias.sector_id = sectores.id AND sectores.comunidad_id = comunidades.id ORDER BY familias.vivienda_id ASC');

        return view('familias.index', compact('familias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$personas = personas::pluck('nombres,apellido_paterno','id');
        $personas = DB::select("select id,concat(nombres,' ',apellido_paterno,' ',apellido_materno) as persona from personas");
        //return $personas;
        $actividades_laborales = actividades_laborales::pluck('actividad_laboral', 'id');
        $discapacidades = discapacidades::pluck('tipo_discapacidad', 'id');
        //$refugios = refugios::pluck('nombre_contacto', 'id');
        $sectores = sectores::pluck('sector', 'id');

        return view('familias.create',compact('personas','actividades_laborales','discapacidades','sectores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $archivo = $request->file('imagen');
        $nombre_original = $archivo->getClientOriginalName();
        $extension = $archivo->getClientOriginalExtension();
        $nuevo_nombre = "imagenVivienda".$nombre_original;
        $r1 = Storage::disk('local')->put($nuevo_nombre, \File::get($archivo));
        $ruta_imagen = "imagenes/".$nuevo_nombre;

        salud::create($request->all());

        if($r1){
            viviendas::create([
                    'tipo_construccion' => $request->input("tipo_construccion"),
                    'anios_vida' => $request->input("anios_vida"),
                    'ubicacion' => $request->input("ubicacion"),
                    'latitud' => $request->input("latitud"),
                    'logintud' => $request->input("logintud"),
                    'detalle' => $request->input("detalle"),
                    'imagen' => $ruta_imagen,
                    ]
                );
            response()->json([
                "mensaje" => "creado"
                ]);
        }else{
            return response()->json([
                "mensaje" => "error imagen"
                ]);
        }

        //viviendas::create($request->all());

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

        $idViv = "";
        $idVivienda = DB::select("SELECT MAX(id) as idVivi FROM viviendas");
        foreach ($idVivienda as $idVi ) {
            $idViv=$idVi->idVivi;
        }

        $idPer = "";
        $idPersonasHogares = DB::select("SELECT MAX(id) as idPers FROM personas_hogares");
        foreach ($idPersonasHogares as $idPe ) {
            $idPer=$idPe->idPers;
        }

        $idJefe = "S";

        familias::create([
            'persona_hogar_id'=>$idPer,
            'vivienda_id'=>$idViv,
            'sector_id'=>$request['sector_id'],
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
       $familias = familias::find($id);
        return response()->json(
            $familias->toArray()
        );
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
