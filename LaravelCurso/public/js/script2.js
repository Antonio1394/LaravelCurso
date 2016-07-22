$(document).ready(function(){
    var tablaDatos=$("#datos");
    var route="http://cinema.app/generos";

    $.get(route,function(res){
        $(res).each(function(key,value){
            tablaDatos.append("<tr><td>"+value.genre+"</td><td><button value="+value.id+" OnClick='Mostrar(this)' class='btn btn-primary'data-toggle='modal' data-target='#myModal'>Editar</button> <button class='btn btn-danger'>Elimiar</button></td></tr>");
        });
    });


});//Fin del principal

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
		data: {genre: dato}
	});
});