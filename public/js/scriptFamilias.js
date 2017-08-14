$(document).ready(function(){
      $('#tablee').DataTable();
    });


$(document).ready(function(){
	Carga();
});

function Carga(){
	debugger;
	var tablaDatos = $("#datos");
	var route = "/familia"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){			
			tablaDatos.append("<tr><td>"+value.vivienda_id+"</td><td>"+value.nombres+' '+value.apellido_paterno+' '+value.apellido_materno+"</td><td>"+value.edad+"</td><td>"+value.parentesco+"</td><td>"+value.jefe_hogar+"</td><td>"+value.sector+"</td><td>"+value.comunidad+"</td><td><a href='/app/crear_reporte_perdidas/1/"+res.id+"' target='bland_' value="+value.id+" OnClick='MostrarIdReporte(this);' class='btn btn-success'>Generar Reporte</a></td></tr>");
		});
	});
}

function MostrarIdReporte(btn){
	var route = "/familias/"+btn+"/edit"

	$.get(route, function(res){
		$("#id_reporte").val(res.id);
	});
}