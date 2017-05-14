<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recursos;
use App\almacenes;
use App\tipos_instalaciones;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class AlmacenesController extends Controller
{
    public function listing(){
        $almacenes = DB::table('almacenes')
                        ->join('recursos', 'recursos.id', '=', 'almacenes.recurso_id')
                        ->select('recursos.*', 'almacenes.id as almacen_id', 
                        'almacenes.observacion')->get();

        return $almacenes;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('almacenes.index',compact('tipos_instalaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('almacenes.create',compact('tipos_instalaciones'));
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

        almacenes::create([
            'recurso_id'=>$idRec,
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
        $almacen = DB::table('almacenes')
                        ->join('recursos', 'recursos.id', '=', 'almacenes.recurso_id')
                        ->select('recursos.*', 'almacenes.id as almacen_id', 
                        'almacenes.observacion')
                        ->where('almacenes.recurso_id', '=', $id)
                        ->get();

        return response()->json(
            $almacen->toArray()
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
               
    }

    public function modificar(Request $request, $id)
    {
        $recursos = DB::update("update recursos SET nombre_recurso = ?,
            direccion = ?, telefono = ?, correo = ?, tipo_instalacion_id = ?
         WHERE id = ?", [$request->input('nombre_recurso'), $request->input('direccion'),
         $request->input('telefono'), $request->input('correo'), $request->input('tipo_instalacion_id'), $id]);

        $almacenes = DB::update("update almacenes SET observacion = ? WHERE recurso_id = ?", [$request->input('observacion'), $id]);

        if($recursos == 1 && $almacenes == 1){
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
