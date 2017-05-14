<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\viviendas;
use App\Http\Requests\ViviendaRequest;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class ViviendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function listing(){
        $viviendas = viviendas::all();

        return response()->json(
            $viviendas->toArray()    
        );
    }

    public function index()
    {
        return view('viviendas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viviendas.create');
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
            viviendas::create($request->all());
            return response()->json(["mensaje"=>"creado"]);
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
        $viviendas = viviendas::find($id);

        return response()->json(
            $viviendas->toArray()
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
        $viviendas = DB::update("update viviendas SET tipo_construccion = ?, anios_vida = ?, ubicacion = ? WHERE id = ?", [$request->input('tipo_construccion'), $request->input('anios_vida'), $request->input('ubicacion'), $id]);

        if($viviendas == 1){
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
