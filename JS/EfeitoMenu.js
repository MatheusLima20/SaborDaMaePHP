
$(document).ready(function (){
    
    $("#menuTop").children().children().children().mouseover(function (){
        
        $(this).css("color", "#FFF");
        $(this).css("padding", "7px").css("background","#ED3237");
        
    }).mouseout(function (){
        
        $(this).css("color", "#000");
        $(this).css("padding", "0px").css("background","#f9e302");
    });
    
});



