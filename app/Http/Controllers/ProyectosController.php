<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\proyectos;
use App\programas;
use App\organizaciones;
use Illuminate\Routing\Route;
use Session;
use Redirect;

class ProyectosController extends Controller
{
    
    public function listing(){
        $proyectos = proyectos::all();

        return response()->json(
            $proyectos->toArray()    
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
        $programas = programas::pluck('programa', 'id');

        return view('proyectos.index',compact('organizaciones','programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizaciones = organizaciones::pluck('nombre', 'id');
        $programas = programas::pluck('programa', 'id');

        return view('proyectos.create',compact('organizaciones','programas'));
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
            proyectos::create($request->all());
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
        $proyecto = proyectos::find($id);

        return response()->json(
            $proyecto->toArray()
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
        $proyecto = proyectos::find($id);
        $proyecto->fill($request->all());
        $proyecto->save();

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
