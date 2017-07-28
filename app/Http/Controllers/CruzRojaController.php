<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recursos;
use App\CruzRoja;
use App\tipos_instalaciones;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class CruzRojaController extends Controller
{

    public function listing(){

        $cruz_roja = DB::table('cruz_roja')
                        ->join('recursos', 'recursos.id', '=', 'cruz_roja.recurso_id')
                        ->select('recursos.*', 'cruz_roja.id as cruz_roja_id',
                            'cruz_roja.n_miembros', 'cruz_roja.n_camas',
                            'n_ambulancias','cruz_roja.observacion')->get();

        return $cruz_roja; 
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('cruzRoja.index',compact('tipos_instalaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('cruzRoja.create',compact('tipos_instalaciones'));
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

        CruzRoja::create([
            'recurso_id'=>$idRec,
            'n_miembros'=>$request['n_miembros'],
            'n_camas'=>$request['n_camas'],
            'n_ambulancias'=>$request['n_ambulancias'],
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
        $cruzRoja = DB::table('cruz_roja')
                        ->join('recursos', 'recursos.id', '=', 'cruz_roja.recurso_id')
                        ->select('recursos.*', 'cruz_roja.id as cruz_roja_id',
                            'cruz_roja.n_miembros', 'cruz_roja.n_camas',
                            'n_ambulancias','cruz_roja.observacion')
                        ->where('cruz_roja.recurso_id', '=', $id)
                        ->get();

        return response()->json(
            $cruzRoja->toArray()
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

        $cruz_roja = DB::update("update cruz_roja SET n_miembros = ?, n_camas = ?, n_ambulancias = ?, observacion = ? WHERE recurso_id = ?", [$request->input('n_miembros'), $request->input('n_camas'), $request->input('n_ambulancias'), $request->input('observacion'), $id]);

        if($recursos == 1 && $cruz_roja == 1){
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
