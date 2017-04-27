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
        //$personales = personales::all();
         $personales = DB::select("SELECT concat(personas.nombres, ' ',personas.apellido_paterno, ' ', personas.apellido_paterno) AS persona, personales.fecha_inicio, personales.fecha_fin, departamentos.departamento FROM personas, personales, departamentos WHERE personales.persona_id = personas.id AND personales.departamento_id = departamentos.id");

        return $personales;    
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

       $departamentos = departamentos::pluck('departamento', 'id');
       $personas = personas::pluck('nombres', 'id');

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
        $departamentos = departamentos::pluck('departamento', 'id');
        $personas = personas::pluck('nombres', 'id');

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
        $personal = personales::find($id);
        $personal->fill($request->all());
        $personal->save();

        return response()->json([
            "mensaje" => "listo"
        ]);    
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
