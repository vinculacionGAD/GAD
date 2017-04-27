<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\programas;
use Illuminate\Routing\Route;
use Session;
use Redirect;

class ProgramasController extends Controller
{
    
    public function listing(){
        $programas = programas::all();

        return response()->json(
            $programas->toArray()    
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('programas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programas.create');
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
            programas::create($request->all());
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
        $programa = programas::find($id);

        return response()->json(
            $programa->toArray()
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
        $programa = programas::find($id);
        $programa->fill($request->all());
        $programa->save();

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
    public function destroy()
    {
        $this->programas->delete();

        return response()->json([
            "mensaje" => "borrado"
        ]);
    }
}
