$('#registro').click(function(){
    var dato=$('#genre').val();
    var route="http://cinema.app/genero";

    .ajax({
        url:        route,
        type:       'POST',
        dataType:   'json',
        data:{genre:dato }
    }); 
});
