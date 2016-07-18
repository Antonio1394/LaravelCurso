$(document).ready(function(){
    var tablaDatos=$("#datos");
    var route="http://cinema.app/generos";

    $.get(route,function(res){
        $(res).each(function(key,value){
            tablaDatos.append("<tr><td>"+value.genre+"</td></tr>");
        });
    });


});//Fin del principal