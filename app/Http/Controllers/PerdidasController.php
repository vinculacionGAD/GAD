<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\personas;
use App\perdidas;
use Session;
use Redirect;
use DB;

class PerdidasController extends Controller
{

    public function listing(){

        $perdidas = DB::table('perdidas')
                        ->join('personas', 'personas.id', '=', 'perdidas.persona_id')
                        ->select('personas.doc_identificacion', 'personas.nombres', 'personas.apellido_paterno', 'personas.apellido_materno',
                            'perdidas.id', 'perdidas.descripcion', 
                            'perdidas.fecha_perdida', 'perdidas.monto_estimado')->get();

        return $perdidas; 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$personas = personas::pluck('nombres', 'id');
        $personas = DB::select("select id,concat(nombres,' ',apellido_paterno,' ',apellido_materno) as persona from personas");
        return view('perdidas.index',compact('personas'));
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
        return view('perdidas.create',compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            perdidas::create($request->all());
            return response()->json([
                "mensaje" => "creado"
                ]);
        }
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
        $perdida = perdidas::find($id);

        return response()->json(
            $perdida->toArray()
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
        $perdidas = DB::update("update perdidas SET descripcion = ?, fecha_perdida = ?, monto_estimado = ?, persona_id = ? WHERE id = ?", [$request->input('descripcion'), $request->input('fecha_perdida'), $request->input('monto_estimado'), $request->input('persona_id'), $id]);

        if($perdidas == 1){
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
