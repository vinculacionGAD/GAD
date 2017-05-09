<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recursos;
use App\hospitales;
use App\tipos_instalaciones;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class HospitalesController extends Controller
{
    public function listing(){

        $hospitales = DB::table('hospitales')
                        ->join('recursos', 'recursos.id', '=', 'hospitales.recurso_id')
                        ->select('recursos.*', 'hospitales.id as hospital_id',
                            'hospitales.n_medicos', 'hospitales.n_enfermeros',
                            'hospitales.observacion', 'hospitales.n_quirofano',
                            'hospitales.n_camas')->get();

        return $hospitales; 
    }       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('hospitales.index',compact('tipos_instalaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('hospitales.create',compact('tipos_instalaciones'));
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

        hospitales::create([
            'recurso_id'=>$idRec,
            'n_medicos'=>$request['n_medicos'],
            'n_enfermeros'=>$request['n_enfermeros'],
            'observacion'=>$request['observacion'],
            'n_quirofano'=>$request['n_quirofano'],
            'n_camas'=>$request['n_camas']
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
        $hospital = DB::table('hospitales')
                        ->join('recursos', 'recursos.id', '=', 'hospitales.recurso_id')
                        ->select('recursos.*', 'hospitales.id as hospital_id',
                            'hospitales.n_medicos', 'hospitales.n_enfermeros',
                            'hospitales.observacion', 'hospitales.n_quirofano',
                            'hospitales.n_camas')
                        ->where('hospitales.recurso_id', '=', $id)
                        ->get();

        return response()->json(
            $hospital->toArray()
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
