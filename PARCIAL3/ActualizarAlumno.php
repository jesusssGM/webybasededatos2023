<?php

    include 'conexion.php';
    $ID = $_POST["id"];
    $nombre = $_POST["nombre"];
    $no_control = $_POST["nc"];
    $semestre = $_POST["semestre"];
    $edad = $_POST["edad"];
    $turno = $_POST["turno"];
    $sexo = $_POST["sexo"];

    $sql = "UPDATE alumnos SET nombre='".$nombre."', no_control='".$no_control."', semestre=".$semestre.", edad=".$edad.", turno='".$turno."', sexo=".$sexo." WHERE id=".$ID;

    if($conexion->query($sql) === TRUE){
        header("Location: consultarAlumnos.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='consultarAlumnos.php'>Regresar a alumnos</a></h3>";
        $conexion->close();
    }

?>