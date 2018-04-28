

$(function () {

    var maxCaracteres = $(".maxCaracteres").text();

    $("textArea").bind("input keyup paste", function () {
        var textArea = $("textArea").val();

        textArea = textArea.substr(0, maxCaracteres);

        $("textArea").val(textArea);
        
        $(".conta_caracteres").text( textArea.length + " ");

    });

});