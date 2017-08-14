<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\comunidades;
use App\sectores;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;
use Storage;
use Hash;

class SectoresController extends Controller
{

    public function listing(){
        $sectores = sectores::all();

        return response()->json(
            $sectores->toArray()    
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectores = sectores::all();        
        $comunidades = comunidades::pluck('comunidad', 'id');
        return view('sectores.index',compact('comunidades','sectores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunidades = comunidades::pluck('comunidad', 'id');
        return view('sectores.create',compact('comunidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $archivo = $request->file('imagen');
        $nombre_original = $archivo->getClientOriginalName();
        $extension = $archivo->getClientOriginalExtension();
        $nuevo_nombre = "imagenSector".$nombre_original;
        $r1 = Storage::disk('local')->put($nuevo_nombre, \File::get($archivo));
        $ruta_imagen = "imagenes/".$nuevo_nombre;        

        if($r1){
            sectores::create([
                    'sector' => $request->input("sector"),
                    'abreviatura' => $request->input("abreviatura"),
                    'ubicacion' => $request->input("ubicacion"),
                    'observacion' => $request->input("observacion"),
                    'comunidad_id' => $request->input("comunidad_id"),
                    'latitud' => $request->input("latitud"),
                    'longitud' => $request->input("longitud"),
                    'imagen' => $ruta_imagen,
                    ]
                );
            return response()->json([
                "mensaje" => "creado"
                ]);
        }else{
            return response()->json([
                "mensaje" => "error imagen"
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
        //$comunidades = comunidades::pluck('comunidad', 'id');
        $sector = sectores::find($id);

        return response()->json(
            $sector->toArray()
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
        $sectores = DB::update("update sectores SET sector = ?, abreviatura = ?, ubicacion = ?, observacion = ?, comunidad_id = ? WHERE id = ?", [$request->input('sector'), $request->input('abreviatura'), $request->input('ubicacion'), $request->input('observacion'), $request->input('comunidad_id'), $id]);

        if($sectores == 1){
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
