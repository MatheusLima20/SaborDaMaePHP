

$(function (){
    
    $("#tabs").tabs();
    
    $("#tabs").children("ul").css("background-color", "#f9e302");
    $("#tabs").children().children().children().css("color", "#000");
    
/**********************************************************/  
  $("#tabs").children().children().children().mouseover(function () {
        
        $(this).css("color", "#000").css("background-color", "#f9e302");
        
    }).mouseout(function (){
        
        $(this).css("background-color", "#FFF");
        
    });
    
});

