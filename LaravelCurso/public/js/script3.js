$(document).on('click','pagination a',function(e){
    e.preventDedault();
    var page=$($this).attr('href');

    console.log(page);
});