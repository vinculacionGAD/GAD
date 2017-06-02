$("#registroAlmacen").click(function(){
	var datos = new FormData($("#frmAlmacenes")[0]);
	var route = "/almacenes"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-almacen").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroBombero").click(function(){
	var datos = new FormData($("#frmBomberos")[0]);
	var route = "/bomberos"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-bombero").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroComunidad").click(function(){
	var datos = new FormData($("#frmComunidad")[0]);	
	var route = "/comunidades"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-comunidad").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroDepartamento").click(function(){
	var datos = new FormData($("#frmDepartamento")[0]);
	var route = "/departamentos"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-departamento").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroFamilia").click(function(){
	var datos = new FormData($("#frmRegistraFamilia")[0]);
	var route = "/familias"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-familia").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroHospital").click(function(){
	var datos = new FormData($("#frmHospitales")[0]);
	var route = "/hospitales"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-hospital").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroMarina").click(function(){
	var datos = new FormData($("#frmMarina")[0]);
	var route = "/marinas"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-marina").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroOrganizacion").click(function(){
	var datos = new FormData($("#frmOrganizaciones")[0]);	
	var route = "/organizaciones"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-organizacion").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroPersonaHogar").click(function(){
	var datos = new FormData($("#frmRegistraFamiliaHogares")[0]);
	var route = "/personasHogares"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,		
		data: datos,

		success:function(){
			$("#msj-insert-miembrofamilia").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroPersonal").click(function(){
	var datos = new FormData($("#frmPersonales")[0]);
	var route = "/personales"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,		
		data: datos,

		success:function(){
			$("#msj-insert-personal").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroPersona").click(function(){
	var datos = new FormData($("#frmPersonas")[0]);
	var route = "/personas"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,		
		data: datos,

		success:function(){
			$("#msj-insert-persona").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroPolicia").click(function(){
	var datos = new FormData($("#frmPolicia")[0]);
	var route = "/policias"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-policia").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroProducto").click(function(){
	var datos = new FormData($("#frmProductos")[0]);
	var route = "/productos"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,		
		data: datos,

		success:function(){
			$("#msj-insert-producto").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroPrograma").click(function(){
	var datos = new FormData($("#frmProgramas")[0]);
	var route = "/programas"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,		
		data: datos,

		success:function(){
			$("#msj-insert-programa").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroProveedor").click(function(){	
	var datos = new FormData($("#frmProveedores")[0]);		
	var route = "/proveedores"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,		
		data: datos,

		success:function(){
			$("#msj-insert-proveedor").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroProyecto").click(function(){
	var datos = new FormData($("#frmProyectos")[0]);
	var route = "/proyectos"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,		
		data: datos,

		success:function(){
			$("#msj-insert-proyecto").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroPuntoEncuentro").click(function(){
	var datos = new FormData($("#frmPuntoEncuentro")[0]);	
	var route = "/puntosEncuentro"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-puntoEncuentro").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroRefugio").click(function(){
	var datos = new FormData($("#frmRefugios")[0]);
	var route = "/refugios"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-refugio").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroSector").click(function(){
	var datos = new FormData($("#frmSectores")[0]);	
	var route = "/sectores"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-sector").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroVivienda").click(function(){
	var datos = new FormData($("#frmViviendas")[0]);	
	var route = "/viviendas"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-vivienda").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});

$("#registroVoluntarios").click(function(){
	var datos = new FormData($("#frmVoluntarios")[0]);	
	var route = "/voluntario"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-voluntario").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
});