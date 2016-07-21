$('#registro').click(function(){
    var dato= $('#genero').val();
    var route="http://cinema.app/genero";
    var token= $("#token").val();
    $.ajax({
        url:        route,
        headers:    {'X-CSRF-TOKEN':token},
        type:       'POST',
        dataType:   'json',
        data:{genre:dato },

        success:function(){
            $("#msj-success").fadeIn(3);
        }
    }); 
});
