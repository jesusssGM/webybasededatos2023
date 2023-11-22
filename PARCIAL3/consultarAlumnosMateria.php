<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
<?php 
        include 'menu.php'; 
        include 'conexion.php'; 
        //Recuperamos los datos de la base de datos 
        $sql = "SELECT * FROM  alumno";
        $datos = $conexion->query($sql);

    ?> 

    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php if($datos->num_rows > 0) { ?>
                <?php while($registro = $datos->fetch_assoc()){ 
                    $id= $registro["id"];
                     $sql2 = "SELECT a.*, m.nombre AS materia_nombre FROM alumnos a INNER JOIN alumnos_materias am ON a.id = am.alumnos INNER JOIN materias m ON m.id";
                     $datos2 = $conexion->query($sql2);
                       ?>

                <div class="card">
                    <div class="card-heard">
                        <?php echo $registro["nombre"]; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">materias cargadas:</h5>
                        <p class="card-text">
                            <ul>
                                <?php while($materia = $datos2->fetch_assoc()) { ?>
                              <li><?php echo $materia["materia_nombre"]; ?></li>
                            <?php    }   ?>
                            </ul>
                        </p>
                    </div>
                </div>


                    <?php }  ?>
                    <?php } else { ?>
                     <h2 class="m-4">no existe datos de el alumno en la base</h2> 
                     <?php }?>                             
            </div>
        </div>
    </div>

<footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>
    
    <script src="js/bootstrap.js"></script>
</body>
</html>