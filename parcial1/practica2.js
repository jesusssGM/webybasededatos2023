$(document).ready(function(){
    $("#boton1").click(function (e) {
        alert("fue 1 click")
    });

    $("#div1").on("dblclick", function(){
        alert("fue doble click")
    });

    $("#input1").focus(function (e){
        console.log("metodo focus - click en input")
    });

    $("#texto1").hover(function(){
        $("#texto1").css("background-color", "pink");
        $("#texto1").css("font-size", "50px");
    }, function(){
        $("#texto1").css("background-color", "white");
        $("#texto1").css("font-size", "25px");
    });

    $("#input2").keydown(function (e){
        console.log("key down :)")
        $("#input2").css("background-color", "violet");
    });
});