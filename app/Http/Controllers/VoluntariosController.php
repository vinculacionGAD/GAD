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
        $voluntarios = voluntarios::all();

        return response()->json(
            $voluntarios->toArray()    
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizaciones = organizaciones::pluck('nombre', 'id');
        $personas = personas::pluck('nombres', 'id');
        $paises = paises::pluck('nombre_pais', 'id');
        $roles_voluntarios = roles_voluntarios::pluck('rol', 'id');

        return view('voluntarios.index',compact('organizaciones','personas','paises','roles_voluntarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizaciones = organizaciones::pluck('nombre', 'id');
        $personas = personas::pluck('nombres', 'id');
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
      $voluntarios = voluntarios::find($id);
      return response()->json($voluntarios->toArray());
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
