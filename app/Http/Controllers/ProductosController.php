<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\tipos_productos;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use DB;

class ProductosController extends Controller
{
    
    public function listing(){
        $productos = DB::table('productos')
                        ->join('tipos_productos', 'tipos_productos.id', '=', 'productos.tipo_producto_id')
                        ->select('productos.*', 'tipos_productos.tipo_producto')->get();

        return $productos;  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_productos = tipos_productos::pluck('tipo_producto', 'id');

        return view('productos.index', compact('tipos_productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_productos = tipos_productos::pluck('tipo_producto', 'id');

        return view('productos.create', compact('tipos_productos'));
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
            productos::create($request->all());
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
        $producto = productos::find($id);

        return response()->json(
            $producto->toArray()
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
        $productos = DB::update("update productos SET producto = ?, fecha_elaboracion = ?, fecha_caducidad = ?, tipo_producto_id = ? WHERE id = ?", [$request->input('producto'), $request->input('fecha_elaboracion'), $request->input('fecha_caducidad'), $request->input('tipo_producto_id'), $id]);

        if($productos == 1){
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
