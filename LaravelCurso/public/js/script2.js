$(document).ready(function(){
    Carga();
});//Fin del principal

function Carga(){
	var tablaDatos=$("#datos");
    var route="http://cinema.app/generos";
    $("#datos").empty();
    $.get(route,function(res){
        $(res).each(function(key,value){
            tablaDatos.append("<tr><td>"+value.genre+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary'data-toggle='modal' data-target='#myModal'>Editar</button> <button class='btn btn-danger'value="+value.id+" OnClick='Eliminar(this);'>Elimiar</button></td></tr>");
        });
    });
}

function Eliminar(btn){

	var route = "/genero/"+btn.value+"";
	var token=  $("#token").val();

	$.ajax({
		url: 	route,
		headers: {'X-CSRF-TOKEN':token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			
			$("#msj-success").fadeIn();

		}
	});

}
function Mostrar(btn)
{
	console.log(btn.value);
	var route="/genero/"+btn.value+"/edit";

	$.get(route, function(res){
		
			$("#genero").val(res.genre);
			$("#id").val(res.id);

	});
}

$("#actualizar").click(function(){

	var value = $("#id").val();
	var dato = $("#genero").val();
	var route = "/genero/"+value+"";
	var token=  $("#token").val();

	$.ajax({
		url: 	route,
		headers: {'X-CSRF-TOKEN':token},
		type: 'PUT',
		dataType: 'json',
		data: {genre: dato},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();

		}
	});
});