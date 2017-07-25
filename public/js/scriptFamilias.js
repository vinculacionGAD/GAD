$(document).ready(function(){
      $('#tablee').DataTable();
    });


$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/familia"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){			
			tablaDatos.append("<tr><td>"+value.vivienda_id+"</td><td>"+value.nombres+' '+value.apellido_paterno+' '+value.apellido_materno+"</td><td>"+value.edad+"</td><td>"+value.parentesco+"</td><td>"+value.jefe_hogar+"</td><td>"+value.sector+"</td><td>"+value.comunidad+"</td></tr>");
		});
	});
}