$(document).ready(function ()
{   
    var carta1 = ""; var carta2 = "";
    var par = false;
    var total_pares = 0; 

    $("img").click(function (e){
        
        var estado = $(this).attr('data-estado')
        var nombre_imagen = $(this).attr('data-id')
        if(estado=="0"){
            if(carta1 == ""){
                console.log("estado de la carta:" + estado)
                carta1 = $(this);
                carta1.attr('src', 'imagenes/' + nombre_imagen)
                console.log("se ignoro la carta 1: ")
               
            }else{
                carta2 =$(this);
                carta1.attr('src', 'imagenes/' + nombre_imagen)
                console.log("se ignoro la carta 2: ")
            }
        }

       
    });
});