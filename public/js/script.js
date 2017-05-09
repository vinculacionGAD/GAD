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
	var departamento = $("#departamento").val();	
	var observacion = $("#observacion").val();	
	var route = "http://127.0.0.1:8000/departamentos"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			departamento: departamento, 
			observacion: observacion
		},

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
		data:datos,

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

$("#registroOrganizacion").click(function(){
	var nombre = $("#nombre").val();
	var acronimo = $("#acronimo").val();
	var tipo_organizacion = $("#tipo_organizacion").val();
	var region = $("#region").val();
	var telefono = $("#telefono").val();
	var sitio_web = $("#sitio_web").val();
	var anio = $("#anio").val();
	var twitter = $("#twitter").val();
	var logotipo = $("#logotipo").val();	
	var observacion = $("#observacion").val();	
	var pais_id = $("#pais_id").val();
	var route = "http://127.0.0.1:8000/organizaciones"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			nombre: nombre, 
			acronimo: acronimo, 
			tipo_organizacion: tipo_organizacion, 
			region: region, 
			telefono: telefono, 
			sitio_web: sitio_web, 
			anio: anio, 
			twitter: twitter, 
			logotipo: logotipo, 
			observacion: observacion,
			pais_id: pais_id
		},

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

$("#registroPersonal").click(function(){
	var fecha_inicio = $("#fecha_inicio").val();	
	var fecha_fin = $("#fecha_fin").val();
	var persona_id = $("#persona_id").val();
	var departamento_id = $("#departamento_id").val();
	var route = "http://127.0.0.1:8000/personales"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			fecha_inicio: fecha_inicio, 
			fecha_fin: fecha_fin, 
			persona_id: persona_id, 
			departamento_id: departamento_id
		},

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
	var doc_identificacion = $("#doc_identificacion").val();	
	var nombres = $("#nombres").val();
	var apellido_paterno = $("#apellido_paterno").val();
	var apellido_materno = $("#apellido_materno").val();
	var fecha_nacimiento = $("#fecha_nacimiento").val();
	var sexo = $("#sexo").val();
	var correo_electronico = $("#correo_electronico").val();
	var telefono_movil = $("#telefono_movil").val();
	var estado_civil = $("#estado_civil").val();
	var route = "http://127.0.0.1:8000/personas"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			doc_identificacion: doc_identificacion, 
			nombres: nombres, 
			apellido_paterno: apellido_paterno, 
			apellido_materno: apellido_materno, 
			fecha_nacimiento: fecha_nacimiento, 
			sexo: sexo, 
			correo_electronico: correo_electronico, 
			telefono_movil: telefono_movil, 
			estado_civil: estado_civil
		},

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

$("#registroProducto").click(function(){
	var producto = $("#producto").val();	
	var fecha_elaboracion = $("#fecha_elaboracion").val();
	var fecha_caducidad = $("#fecha_caducidad").val();
	var tipo_producto_id = $("#tipo_producto_id").val();
	var route = "http://127.0.0.1:8000/productos"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			producto: producto, 
			fecha_elaboracion: fecha_elaboracion,
			fecha_caducidad: fecha_caducidad,
			tipo_producto_id: tipo_producto_id
		},

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
	var programa = $("#programa").val();	
	var observacion = $("#observacion").val();
	var route = "http://127.0.0.1:8000/programas"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			programa: programa, 
			observacion: observacion
		},

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
	var persona_id = $("#persona_id").val();	
	var route = "http://127.0.0.1:8000/proveedores"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			persona_id: persona_id
		},

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
	var proyecto = $("#proyecto").val();	
	var status = $("#status").val();
	var fecha_inicio = $("#fecha_inicio").val();
	var fecha_fin = $("#fecha_fin").val();
	var presupuesto = $("#presupuesto").val();
	var moneda = $("#moneda").val();
	var observacion = $("#observacion").val();
	var organizacion_id = $("#organizacion_id").val();
	var programa_id = $("#programa_id").val();
	var route = "http://127.0.0.1:8000/proyectos"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			proyecto: proyecto, 
			status: status,
			fecha_inicio: fecha_inicio,
			fecha_fin: fecha_fin,
			presupuesto: presupuesto,
			moneda: moneda,
			observacion: observacion,
			organizacion_id: organizacion_id,
			programa_id: programa_id
		},

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
	var sector = $("#sector").val();	
	var abreviatura = $("#abreviatura").val();	
	var ubicacion = $("#ubicacion").val();	
	var observacion = $("#observacion").val();
	var latitud = $("#latitud").val();	
	var longitud = $("#longitud").val();	
	var comunidad_id = $("#comunidad_id").val();	
	var route = "http://127.0.0.1:8000/sectores"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			sector: sector, 
			abreviatura: abreviatura, 
			ubicacion: ubicacion, 
			observacion: observacion,
			latitud: latitud, 
			longitud: longitud, 
			comunidad_id: comunidad_id
		},

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
	var tipo_construccion = $("#tipo_construccion").val();	
	var anios_vida = $("#anios_vida").val();	
	var ubicacion = $("#ubicacion").val();	
	var route = "http://127.0.0.1:8000/viviendas"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		data:{
			tipo_construccion: tipo_construccion, 
			anios_vida:  anios_vida, 
			ubicacion: ubicacion 
		},

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