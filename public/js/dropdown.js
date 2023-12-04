$(document).ready(function(){

    $('.dropdown').hover(function(){
        $(this).addClass('show');
        $(this).find('.dropdown-menu').addClass('show');
    }, function(){
        $(this).removeClass('show');
        $(this).find('.dropdown-menu').removeClass('show');
    });

    $('.dropdown-menu').click(function(e){
        e.stopPropagation();
    });
});