<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComunidadRequest;
use App\comunidades;
use Illuminate\Routing\Route;
use Session;
use Redirect;

class ComunidadesController extends Controller
{

    /*public function __construct(){
        $this->middleware('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->comunidades = comunidades::find($route->getParameter('comunidades'));
        $this->observacion = comunidades::find($route->getParameter('observacion'));
    }*/


    public function listing(){
        $comunidades = comunidades::all();

        return response()->json(
            $comunidades->toArray()    
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('comunidades.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comunidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComunidadRequest $request)
    {
        if($request->ajax()){
            comunidades::create($request->all());
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
        $comunidad = comunidades::find($id);

        return response()->json(
            $comunidad->toArray()
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
        $comunidad = comunidades::find($id);
        $comunidad->fill($request->all());
        $comunidad->save();

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
        $comunidades = comunidades::find($id);
        $comunidades = $comunidades->delete();
        //$this->$comunidades->delete();

        return response()->json([
            "mensaje" => "borrado"
        ]);
    }
}
