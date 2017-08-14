<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedores;
use App\personas;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class ProveedoresController extends Controller
{
    public function listing(){
        $proveedores = DB::table('proveedores')
                        ->join('personas', 'personas.id', '=', 'proveedores.persona_id')
                        ->select('proveedores.*', 'personas.nombres', 'personas.apellido_paterno', 'personas.apellido_materno')->get();

        return $proveedores;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = DB::table('proveedores')
                        ->join('personas', 'personas.id', '=', 'proveedores.persona_id')
                        ->select('proveedores.*', 'personas.nombres', 'personas.apellido_paterno', 'personas.apellido_materno')->get();

        $personas = DB::select("select id,concat(nombres,' ',apellido_paterno,' ',apellido_materno) as persona from personas");
        return view('proveedores.index',compact('personas','proveedores'));
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
        return view('proveedores.create',compact('personas'));
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
            proveedores::create($request->all());
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
        $proveedor = proveedores::find($id);

        return response()->json(
            $proveedor->toArray()
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
        $proveedores = DB::update("update proveedores SET persona_id = ? WHERE id = ?", [$request->input('persona_id'), $id]);

        if($proveedores == 1){
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
