<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\personas;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class PersonasController extends Controller
{
    
    public function listing(){
        $personas = personas::all();

        return response()->json(
            $personas->toArray()    
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
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
            personas::create($request->all());
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
        $persona = personas::find($id);

        return response()->json(
            $persona->toArray()
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
        $personas = DB::update("update personas SET doc_identificacion = ?, nombres = ?, apellido_paterno = ?, apellido_materno = ?, fecha_nacimiento = ?, sexo = ?, correo_electronico = ?, telefono_movil = ?, estado_civil = ? WHERE id = ?", [$request->input('doc_identificacion'), $request->input('nombres'), $request->input('apellido_paterno'), $request->input('apellido_materno'), $request->input('fecha_nacimiento'), $request->input('sexo'), $request->input('correo_electronico'), $request->input('telefono_movil'), $request->input('estado_civil'), $id]);

        if($personas == 1){
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
