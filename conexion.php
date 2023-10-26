<?php

 $server = "localhost:3306";
 $user = "root";
 $password ="root";
 $basededatos = "cetis";


 $conexion = new mysql($server,$user,$password,$basededatos);
 
 if($conexion->connect_error){
    die("fallo la conexion" . $conexion->connect_error);
 }
 ?>