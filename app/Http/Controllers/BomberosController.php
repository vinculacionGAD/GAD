<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recursos;
use App\bomberos;
use App\tipos_instalaciones;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class BomberosController extends Controller
{

    public function listing(){

        $bomberos = DB::table('bomberos')
                        ->join('recursos', 'recursos.id', '=', 'bomberos.recurso_id')
                        ->select('recursos.*', 'bomberos.id as bombero_id',
                            'bomberos.n_bomberos', 'bomberos.n_carros',
                            'bomberos.observacion')->get();

        return $bomberos; 
    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bomberos = DB::table('bomberos')
                        ->join('recursos', 'recursos.id', '=', 'bomberos.recurso_id')
                        ->select('recursos.*', 'bomberos.id as bombero_id',
                            'bomberos.n_bomberos', 'bomberos.n_carros',
                            'bomberos.observacion')->get();

        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('bomberos.index',compact('tipos_instalaciones','bomberos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('bomberos.create',compact('tipos_instalaciones'));
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

        bomberos::create([
            'recurso_id'=>$idRec,
            'n_bomberos'=>$request['n_bomberos'],
            'n_carros'=>$request['n_carros'],
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
        $bombero = DB::table('bomberos')
                        ->join('recursos', 'recursos.id', '=', 'bomberos.recurso_id')
                        ->select('recursos.*', 'bomberos.id as bombero_id',
                            'bomberos.n_bomberos', 'bomberos.n_carros',
                            'bomberos.observacion')
                        ->where('bomberos.recurso_id', '=', $id)
                        ->get();

        return response()->json(
            $bombero->toArray()
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

        $bomberos = DB::update("update bomberos SET n_bomberos = ?, n_carros = ?, observacion = ? WHERE recurso_id = ?", [$request->input('n_bomberos'), $request->input('n_carros'), $request->input('observacion'), $id]);

        if($recursos == 1 && $bomberos == 1){
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
