@extends('Layouts.app')

@section('content')
<h2>Ingreso de Productos</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmProductos','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                 <div class="form-group">
                                    <label for="disabledTextInput">Categoria Productos</label>
                                    <select id="idProducto" name="idProducto" class="form-control text">
                                    <option>Seleccione Categoria Producto</option>
                                    
                                    </select>
                                </div>

                                {!!Form::label('Nombre de Producto:')!!}
                                {!!Form::text('producto',null,['id'=>'producto', 'class'=>'form-control','placeholder'=>'Ingrese el Stock de Productos','required'=>''])!!}

                                  <div class="form-group tamaño">
                                    <label for="disabledTextInput">Almacen </label>
                                    <select id="estadoCivil" name="estadoCivil" onchange='deleteError("estadoCivil")' class="form-control text">
                                        <option>Seleccione Almacen</option>
                                        <option value="Miraflores">Miraflores</option>
                                        <option value="El rosal">El rosal</option>
                                        <option value="Las Bromelias">Las Bromelias</option>
                                        <option value="Tikikaka">Tikikaka</option>
                                    </select>
                                </div>

                                {!!Form::label('Stock:')!!}
                                {!!Form::text('stock',null,['id'=>'stock', 'class'=>'form-control','placeholder'=>'Ingrese el Stock de Productos','required'=>''])!!}
                                
                                {!!Form::label('Precio:')!!}
                                {!!Form::text('precio',null,['id'=>'precio', 'class'=>'form-control','placeholder'=>'Ingrese Precio','required'=>''])!!}

                                {!!Form::label('Descripcion:')!!}
                                {!!Form::text('desccripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese Descripcion de Producto','required'=>''])!!}

                                 <br>{!!Form::label('Fecha de elaboracion:')!!}
                                    <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;     width: 51%;">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                     <input type="text" id="fechaNacimiento" name="birthdate" value="10/24/1995" style="border: 0px;    width: 64%;" /> <b class="caret"></b>
                                </div>
 
                                        <script type="text/javascript">
                                        $(function() {
                                            $('input[name="birthdate"]').daterangepicker({
                                                singleDatePicker: true,
                                                showDropdowns: true
                                            });
                                        });
                                        </script><br>

                                         <br>{!!Form::label('Fecha de caducidad:')!!}
                                    <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;     width: 51%;">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                     <input type="text" id="fechaNacimiento" name="birthdate" value="10/24/1995" style="border: 0px;    width: 64%;" /> <b class="caret"></b>
                                </div>
 
                                        <script type="text/javascript">
                                        $(function() {
                                            $('input[name="birthdate"]').daterangepicker({
                                                singleDatePicker: true,
                                                showDropdowns: true
                                            });
                                        });
                                        </script><br>


                     {!!Form::close()!!}

                                {!!link_to('#', $title='Guardar', $attributes =['id'=>'btn_GuardarProductos', 'class'=>'btn btn-success btn-guardar'], $secure= null)!!}              
                   
                </div>  
               
        </div> <!--fin del div registro -->
     </div>
</div>
@endsection


@section('scripts')
    <script>
     
    </script>


@endsection