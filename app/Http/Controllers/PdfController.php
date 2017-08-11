<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user;
use App\hospitales;
use App\Pais;
use DB;



class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pdf.listado_reportes");
    }


      public function crearPDF($datos,$vistaurl,$tipo)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }

    public function crearPDF2($datosFactura,$datosDetalle,$vistaurl,$tipo)
    {

        $factura = $datosFactura;
        $detallefactura = $datosDetalle;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('factura','detallefactura', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crear_reporte_hospitales($tipo){

     $vistaurl="Pdf.reporte_por_hospitales";
     $hospitales=DB::select("SELECT recursos.*, tipos_instalaciones.tipo_instalacion, hospitales.n_medicos, hospitales.n_enfermeros,
                                hospitales.n_quirofano, hospitales.n_camas FROM hospitales INNER JOIN ( recursos INNER JOIN tipos_instalaciones ON
                                recursos.tipo_instalacion_id = tipos_instalaciones.id) ON recursos.id = hospitales.recurso_id  ");
     
     return $this->crearPDF($hospitales, $vistaurl,$tipo);
    }

    public function crear_reporte_albergues($tipo){

     $vistaurl="Pdf.reporte_por_refugios";
     $hospitales=DB::select("SELECT recursos.*, tipos_instalaciones.tipo_instalacion, refugios.nombre_contacto,
                                refugios.telefono_contacto,refugios.capacidad_maxima, refugios.poblacion, refugios.estado FROM refugios
                                INNER JOIN ( recursos INNER JOIN tipos_instalaciones ON recursos.tipo_instalacion_id = tipos_instalaciones.id )
                                ON recursos.id = refugios.recurso_id"); 
     return $this->crearPDF($hospitales, $vistaurl,$tipo);
    }

     public function crear_reporte_marinas($tipo){

     $vistaurl="Pdf.reporte_por_marina";
     $hospitales=DB::select("SELECT recursos.*, tipos_instalaciones.tipo_instalacion, marina.n_botes, 
                                marina.n_personas, marina.observacion FROM marina INNER JOIN 
                                ( recursos INNER JOIN tipos_instalaciones ON recursos.tipo_instalacion_id = tipos_instalaciones.id ) 
                                ON recursos.id = marina.recurso_id  "); 
     return $this->crearPDF($hospitales, $vistaurl,$tipo);
    }

     public function crear_reporte_bomberos($tipo){

     $vistaurl="Pdf.reporte_por_bomberos";
     $bomberos=DB::select("SELECT recursos.*, tipos_instalaciones.tipo_instalacion, bomberos.n_bomberos, 
                                bomberos.n_carros, bomberos.observacion FROM bomberos INNER JOIN 
                                ( recursos INNER JOIN tipos_instalaciones ON recursos.tipo_instalacion_id = tipos_instalaciones.id ) 
                                ON recursos.id = bomberos.recurso_id"); 
     return $this->crearPDF($bomberos, $vistaurl,$tipo);
    }

    public function crear_reporte_policias($tipo){

     $vistaurl="Pdf.reporte_por_policia";
     $policias=DB::select("SELECT recursos.*, tipos_instalaciones.tipo_instalacion, policias.n_policias, 
                            policias.n_carros, policias.n_motos, policias.observacion FROM policias INNER JOIN 
                            ( recursos INNER JOIN tipos_instalaciones ON recursos.tipo_instalacion_id = tipos_instalaciones.id ) 
                            ON recursos.id = policias.recurso_id  "); 
     return $this->crearPDF($policias, $vistaurl,$tipo);
    }

    

     public function crear_reporte_proyectos($tipo){

     $vistaurl="Pdf.reporte_por_proyectos_organizacion";
     $proyectos=DB::select("SELECT programas.programa, proyectos.proyecto, proyectos.status, proyectos.fecha_inicio, proyectos.fecha_fin,
            proyectos.presupuesto, proyectos.moneda, proyectos.observacion, organizaciones.nombre, organizaciones.tipo_organizacion,
            organizaciones.telefono, organizaciones.sitio_web, organizaciones.twitter, paises.nombre_pais FROM
            proyectos INNER JOIN programas ON proyectos.programa_id = programas.id 
            INNER JOIN organizaciones ON proyectos.organizacion_id = organizaciones.id
            INNER JOIN paises ON organizaciones.pais_id = paises.id"); 
     return $this->crearPDF($proyectos, $vistaurl,$tipo);
    }

    public function crear_reporte_personales($tipo){

     $vistaurl="Pdf.reporte_personales";
     $personales=DB::select("SELECT personas.doc_identificacion, CONCAT(personas.nombres, ' ', personas.apellido_paterno, ' ', personas.apellido_materno) 
                AS nombre_persona, TIMESTAMPDIFF(YEAR,personas.fecha_nacimiento,CURRENT_DATE) as edad, personas.fecha_nacimiento,
                personas.sexo, personas.correo_electronico, personas.telefono_movil, personales.fecha_inicio, personales.fecha_fin, 
                departamentos.departamento FROM personales INNER JOIN personas ON personales.persona_id = personas.id
                INNER JOIN departamentos ON personales.departamento_id = departamentos.id"); 
     return $this->crearPDF($personales, $vistaurl,$tipo);
    }

     public function crear_reporte_perdida($tipo){

     $vistaurl="Pdf.reporte_por_perdidas";
     $perdidas=DB::select("SELECT personas.doc_identificacion, CONCAT(personas.nombres, ' ', personas.apellido_paterno, ' ', personas.apellido_materno) 
                AS nombre_persona, TIMESTAMPDIFF(YEAR,personas.fecha_nacimiento,CURRENT_DATE) as edad, personas.fecha_nacimiento,
                personas.sexo, personas.correo_electronico, personas.telefono_movil, perdidas.descripcion, perdidas.monto_estimado,
                perdidas.fecha_perdida FROM perdidas INNER JOIN personas ON perdidas.persona_id = personas.id"); 
     return $this->crearPDF($perdidas, $vistaurl,$tipo);
    }

    public function crear_reporte_programa($tipo,$id){

     $vistaurl="Pdf.reporte_general_proyecto";
     $programa=DB::select("SELECT programas.programa, proyectos.proyecto, proyectos.status, proyectos.fecha_inicio, proyectos.fecha_fin,
        proyectos.presupuesto, proyectos.moneda, proyectos.observacion, organizaciones.nombre, organizaciones.tipo_organizacion,
        organizaciones.telefono, organizaciones.sitio_web, organizaciones.twitter, paises.nombre_pais FROM
        proyectos INNER JOIN programas ON proyectos.programa_id = programas.id
        INNER JOIN organizaciones ON proyectos.organizacion_id = organizaciones.id
        INNER JOIN paises ON organizaciones.pais_id = paises.id WHERE programas.id=$id"); 
     return $this->crearPDF($programa, $vistaurl,$tipo);
    }

     public function crear_reporte_organizacion($tipo,$id){

     $vistaurl="Pdf.reporte_general_organizacion";
     $organizacion=DB::select("SELECT programas.programa, proyectos.proyecto, proyectos.status, proyectos.fecha_inicio, proyectos.fecha_fin,
         proyectos.presupuesto, proyectos.moneda, proyectos.observacion, organizaciones.nombre, organizaciones.tipo_organizacion,
        organizaciones.telefono, organizaciones.sitio_web, organizaciones.twitter, paises.nombre_pais FROM
        proyectos INNER JOIN programas ON proyectos.programa_id = programas.id 
        INNER JOIN organizaciones ON proyectos.organizacion_id = organizaciones.id
        INNER JOIN paises ON organizaciones.pais_id = paises.id WHERE organizaciones.id = $id"); 
     return $this->crearPDF($organizacion, $vistaurl,$tipo);
    }

    public function crear_reporte_perdidas($tipo,$id){

     $vistaurl="Pdf.reporte_general_perdidas";
     $perdidas=DB::select("SELECT personas.doc_identificacion, CONCAT(personas.nombres, ' ', personas.apellido_paterno, ' ', personas.apellido_materno) 
         AS nombre_persona, TIMESTAMPDIFF(YEAR,personas.fecha_nacimiento,CURRENT_DATE) as edad, personas.fecha_nacimiento,
         personas.sexo, personas.correo_electronico, personas.telefono_movil, perdidas.descripcion, perdidas.monto_estimado,
         perdidas.fecha_perdida FROM perdidas INNER JOIN personas ON perdidas.persona_id = personas.id WHERE perdidas.persona_id = $id"); 
     return $this->crearPDF($perdidas, $vistaurl,$tipo);
    }

     public function crear_reporte_almacenes($tipo){

     $vistaurl="Pdf.reporte_general_almacenes";
     $perdidas=DB::select("SELECT recursos.*, tipos_instalaciones.tipo_instalacion, almacenes.observacion 
FROM almacenes INNER JOIN ( recursos INNER JOIN tipos_instalaciones ON recursos.tipo_instalacion_id = tipos_instalaciones.id ) 
ON recursos.id = almacenes.recurso_id"); 
     return $this->crearPDF($perdidas, $vistaurl,$tipo);
    }


     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
