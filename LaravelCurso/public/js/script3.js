$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page=$(this).attr('href').split('page=')[1];

    console.log(page);
});