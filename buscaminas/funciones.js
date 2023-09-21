function pintarTablero(numFilas, numColumnas){

    for(let f=0; f<numFilas; f++){
        for(let c=0; c<numColumnas; c++){
            let newDiv = document.createElement("div");
            newDiv.setAttribute("id","f" + f + "_c" + c );
            newDiv.dataset.fila = f; //cotatdor de filas
            newDiv.dataset.columna = c;// contador de columnas
            newDiv.addEventListener("contextmenu",marcar); //evento con el botón derecho del raton
            newDiv.addEventListener("click",destapar);//evento con el botón izquierdo del raton
            tablero.appendChild(newDiv);
        }
    }
}