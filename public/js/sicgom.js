

$("#home").click(function(){
	cargarContenido("/app/usuarios");
});



function cargarContenido(pagina) {
	$("#content-sgdn").load(pagina);
}