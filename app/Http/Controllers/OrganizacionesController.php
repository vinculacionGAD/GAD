<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\organizaciones;
use App\paises;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use Storage;
use DB;
use Hash;


class OrganizacionesController extends Controller
{

    public function listing(){
        $organizaciones = organizaciones::all();

        return response()->json(
            $organizaciones->toArray()    
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = paises::pluck('nombre_pais', 'id');
        return view('organizaciones.index',compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = paises::pluck('nombre_pais', 'id');
        return view('organizaciones.create',compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $archivo = $request->file('logotipo');
        $nombre_original = $archivo->getClientOriginalName();
        $extension = $archivo->getClientOriginalExtension();
        $nuevo_nombre = "logotipo".$nombre_original;
        $r1 = Storage::disk('local')->put($nuevo_nombre, \File::get($archivo));
        $ruta_imagen = "logotipo/".$nuevo_nombre; 
        if($r1){
            organizaciones::create([
                    'nombre' => $request->input("nombre"),
                    'acronimo' => $request->input("acronimo"),
                    'tipo_organizacion' => $request->input("tipo_organizacion"),
                    'region' => $request->input("region"),
                    'telefono' => $request->input("telefono"),
                    'sitio_web' => $request->input("sitio_web"),
                    'anio' => $request->input("anio"),
                    'twitter' => $request->input("twitter"),
                    'observacion' => $request->input("observacion"),
                    'pais_id' => $request->input("pais_id"),
                    'logotipo' => $ruta_imagen,
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
        $organizacion = organizaciones::find($id);

        return response()->json(
            $organizacion->toArray()
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
        $organizacion = organizaciones::find($id);
        $organizacion->fill($request->all());
        $organizacion->save();

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
