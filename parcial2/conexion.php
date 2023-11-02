<?php

 $server = "localhost";
 $user = "root";
 $password ="";
 $basededatos = "cetis";


 $conexion = new mysqli($server,$user,$password,$basededatos);
 
 if($conexion->connect_error){
    die("fallo la conexion" . $conexion->connect_error);
 }
 ?>