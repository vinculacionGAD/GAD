<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\personales;
use App\departamentos;
use App\personas;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class PersonalesController extends Controller
{

    public function listing(){

        $personales = DB::table('personales')
                        ->join('personas', 'personas.id', '=', 'personales.persona_id')
                        ->join('departamentos', 'departamentos.id', '=', 'personales.departamento_id')
                        ->select('personales.*', 'departamentos.departamento', 
                        'personas.nombres', 'personas.apellido_paterno', 'personas.apellido_materno')->get();

        return $personales;    
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       

       //$departamentos = departamentos::pluck('departamento', 'id');
        $departamentos = DB::select("select id,departamento from departamentos");
       //$personas = personas::pluck('nombres', 'id');
       $personas = DB::select("select id,concat(nombres,' ',apellido_paterno,' ',apellido_materno) as persona from personas");

        return view('personales.index',compact('departamentos','personas'));
        //return view('personales.index',compact('personales'));
        //return $personales;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$nombre_persona = DB::query("SELECT CONCAT(nombres, ' ', apellido_paterno, ' ', apellido_materno) AS persona FROM personas");*/

        //$departamentos = departamentos::pluck('departamento', 'id');
        $departamentos = DB::select("select id,departamento from departamentos");
        //$personas = personas::pluck('nombres', 'id');
        $personas = DB::select("select id,concat(nombres,' ',apellido_paterno,' ',apellido_materno) as persona from personas");

        return view('personales.create',compact('departamentos','personas'));
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
            personales::create($request->all());
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
        $personal = personales::find($id);

        return response()->json(
            $personal->toArray()
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
        $personales = DB::update("update personales SET fecha_inicio = ?, fecha_fin = ?, persona_id = ?, departamento_id = ? WHERE id = ?", [$request->input('fecha_inicio'), $request->input('fecha_fin'), $request->input('persona_id'), $request->input('departamento_id'), $id]);

        if($personales == 1){
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
