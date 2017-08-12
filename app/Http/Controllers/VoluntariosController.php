<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\voluntarios;
use App\personas;
use App\paises;
use App\organizaciones;
use App\roles_voluntarios;
use App\voluntarios_habilidades;
use App\habilidades;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class VoluntariosController extends Controller
{
    public function listing(){
        $voluntarios = DB::table('voluntarios')
                        ->join('personas', 'personas.id', '=', 'voluntarios.persona_id')
                        ->join('roles_voluntarios', 'roles_voluntarios.id', '=', 'voluntarios.rol_voluntario_id')
                        ->join('paises', 'paises.id', '=', 'voluntarios.pais_id')
                        ->join('organizaciones', 'organizaciones.id', '=', 'voluntarios.organizacion_id')
                        ->select('voluntarios.*', 'roles_voluntarios.rol', 
                        'personas.nombres', 'personas.apellido_paterno', 'personas.apellido_materno','paises.nombre_pais', 'organizaciones.nombre')->get();

        return $voluntarios;
        /*$voluntarios = voluntarios::all();

        return response()->json(
            $voluntarios->toArray()    
        );*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voluntarios = DB::table('voluntarios')
                        ->join('personas', 'personas.id', '=', 'voluntarios.persona_id')
                        ->join('roles_voluntarios', 'roles_voluntarios.id', '=', 'voluntarios.rol_voluntario_id')
                        ->join('paises', 'paises.id', '=', 'voluntarios.pais_id')
                        ->join('organizaciones', 'organizaciones.id', '=', 'voluntarios.organizacion_id')
                        ->select('voluntarios.*', 'roles_voluntarios.rol', 
                        'personas.nombres', 'personas.apellido_paterno', 'personas.apellido_materno','paises.nombre_pais', 'organizaciones.nombre')->get();

        $organizaciones = organizaciones::pluck('nombre', 'id');
        //$personas = personas::pluck('nombres', 'id');
        $personas = DB::select("select id,concat(nombres,' ',apellido_paterno,' ',apellido_materno) as persona from personas");
        $paises = paises::pluck('nombre_pais', 'id');
        $roles_voluntarios = roles_voluntarios::pluck('rol', 'id');

        return view('voluntarios.index',compact('organizaciones','personas','paises','roles_voluntarios','voluntarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizaciones = organizaciones::pluck('nombre', 'id');
        //$personas = personas::pluck('nombres', 'id');
        $personas = DB::select("select id,concat(nombres,' ',apellido_paterno,' ',apellido_materno) as persona from personas");
        $paises = paises::pluck('nombre_pais', 'id');
        $roles_voluntarios = roles_voluntarios::pluck('rol', 'id');

        return view('voluntarios.create',compact('organizaciones','personas','paises','roles_voluntarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //console.log('LLegó');
        if($request->ajax()){
            voluntarios::create($request->all());
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
      $voluntario = voluntarios::find($id);

        return response()->json(
            $voluntario->toArray()
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
        $voluntarios = DB::update("update voluntarios SET fecha_inicio = ?, fecha_fin = ?, persona_id = ?, trabajo = ?, pais_id = ?, organizacion_id = ?, rol_voluntario_id = ? WHERE id = ?", [$request->input('fecha_inicio'), $request->input('fecha_fin'), $request->input('persona_id'), $request->input('trabajo'), $request->input('pais_id'), $request->input('organizacion_id'), $request->input('rol_voluntario_id'), $id]);

        if($voluntarios == 1){
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
