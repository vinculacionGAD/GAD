<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recursos;
use App\refugios;
use App\tipos_instalaciones;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class RefugiosController extends Controller
{

    public function listing(){

        $refugios = DB::table('refugios')
                        ->join('recursos', 'recursos.id', '=', 'refugios.recurso_id')
                        ->select('recursos.*', 'refugios.id as refugio_id',
                            'refugios.nombre_contacto', 'refugios.telefono_contacto',
                            'refugios.capacidad_maxima', 'refugios.poblacion',
                            'refugios.estado', 'refugios.observacion')->get();

        return $refugios;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('refugios.index',compact('tipos_instalaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('refugios.create',compact('tipos_instalaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        recursos::create($request->all());
            
        $idRec = "";
        $idRecurso = DB::select("SELECT MAX(id) as idRecu FROM recursos");
        foreach ($idRecurso as $idRe ) {
            $idRec=$idRe->idRecu;
        }

        refugios::create([
            'recurso_id'=>$idRec,
            'nombre_contacto'=>$request['nombre_contacto'],
            'telefono_contacto'=>$request['telefono_contacto'],
            'capacidad_maxima'=>$request['capacidad_maxima'],
            'poblacion'=>$request['poblacion'],
            'estado'=>$request['estado'],
            'observacion'=>$request['observacion'],
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
        $refugio = DB::table('refugios')
                        ->join('recursos', 'recursos.id', '=', 'refugios.recurso_id')
                        ->select('recursos.*', 'refugios.id as refugio_id',
                            'refugios.nombre_contacto', 'refugios.telefono_contacto',
                            'refugios.capacidad_maxima', 'refugios.poblacion',
                            'refugios.estado', 'refugios.observacion')
                        ->where('refugios.recurso_id', '=', $id)
                        ->get();

        return response()->json(
            $refugio->toArray()
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
