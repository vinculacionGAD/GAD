<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recursos;
use App\policias;
use App\tipos_instalaciones;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class PoliciasController extends Controller
{

    public function listing(){

        $policias = DB::table('policias')
                        ->join('recursos', 'recursos.id', '=', 'policias.recurso_id')
                        ->select('recursos.*', 'policias.id as policia_id',
                            'policias.n_policias', 'policias.n_carros',
                            'policias.n_motos', 'policias.observacion')->get();

        return $policias; 
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('policias.index',compact('tipos_instalaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('policias.create',compact('tipos_instalaciones'));
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

        policias::create([
            'recurso_id'=>$idRec,
            'n_policias'=>$request['n_policias'],
            'n_carros'=>$request['n_carros'],
            'n_motos'=>$request['n_motos'],
            'observacion'=>$request['observacion']
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
        $policia = DB::table('policias')
                        ->join('recursos', 'recursos.id', '=', 'policias.recurso_id')
                        ->select('recursos.*', 'policias.id as policia_id',
                            'policias.n_policias', 'policias.n_carros',
                            'policias.n_motos', 'policias.observacion')
                        ->where('policias.recurso_id', '=', $id)
                        ->get();

        return response()->json(
            $policia->toArray()
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

    public function modificar(Request $request, $id)
    {
        $recursos = DB::update("update recursos SET nombre_recurso = ?,
            direccion = ?, telefono = ?, correo = ?, tipo_instalacion_id = ?
         WHERE id = ?", [$request->input('nombre_recurso'), $request->input('direccion'),
         $request->input('telefono'), $request->input('correo'), $request->input('tipo_instalacion_id'), $id]);

        $policias = DB::update("update policias SET n_policias = ?, n_carros = ?, observacion = ?, n_motos = ? WHERE recurso_id = ?", [$request->input('n_policias'), $request->input('n_carros'), $request->input('observacion'), $request->input('n_motos'), $id]);

        if($recursos == 1 && $policias == 1){
            return response()->json([
                "mensaje" => "listo"
            ]);    
        }else {
            return response()->json([
                "mensaje" => "error"
            ]);    
        }        
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
