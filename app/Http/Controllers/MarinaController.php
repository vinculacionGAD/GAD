<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recursos;
use App\marina;
use App\tipos_instalaciones;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class MarinaController extends Controller
{

    public function listing(){

        $marina = DB::table('marina')
                        ->join('recursos', 'recursos.id', '=', 'marina.recurso_id')
                        ->select('recursos.*', 'marina.id as marina_id',
                            'marina.n_botes', 'marina.n_personas',
                            'marina.observacion')->get();

        return $marina; 
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marina = DB::table('marina')
                        ->join('recursos', 'recursos.id', '=', 'marina.recurso_id')
                        ->select('recursos.*', 'marina.id as marina_id',
                            'marina.n_botes', 'marina.n_personas',
                            'marina.observacion')->get();

        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('marinas.index',compact('tipos_instalaciones', 'marina'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_instalaciones = tipos_instalaciones::pluck('tipo_instalacion', 'id');
        return view('marinas.create',compact('tipos_instalaciones'));
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

        marina::create([
            'recurso_id'=>$idRec,
            'n_botes'=>$request['n_botes'],
            'n_personas'=>$request['n_personas'],
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
        $marina = DB::table('marina')
                        ->join('recursos', 'recursos.id', '=', 'marina.recurso_id')
                        ->select('recursos.*', 'marina.id as marina_id',
                            'marina.n_botes', 'marina.n_personas',
                            'marina.observacion')
                        ->where('marina.recurso_id', '=', $id)
                        ->get();

        return response()->json(
            $marina->toArray()
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

        $marina = DB::update("update marina SET n_botes = ?, n_personas = ?, observacion = ? WHERE recurso_id = ?", [$request->input('n_botes'), $request->input('n_personas'), $request->input('observacion'), $id]);

        if($recursos == 1 && $marina == 1){
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
