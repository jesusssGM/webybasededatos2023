<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php
    include 'menu.php';
    include 'conexion.php';
    //recuperamoos los datos dee la base de datos
    $sql ="SELECT * FROM alumnos";
    $datos = $conexion->query(sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0){?> 
                <table class="table table-hover">
                <thead>
                    <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Numero de control</th>
                <th>semestre</th>
                <th>edad</th>
                <th>turno</th>
                <th>sexo</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    while($registro = $datos->fetch_assoc()){ ?>

                    <tr>
                        <td> <?php echo $registro["id"]; ?></td>
                        <td> <?php echo $registro["nombre"]; ?></td>
                        <td> <?php echo $registro["numero_control"]; ?></td>
                        <td> <?php echo $registro["edad"]; ?></td>
                        <td> <?php echo $registro["turno"]; ?></td>
                        <td> <?php echo $registro["sexo"]; ?></td>
                        <td> <?php echo $registro["semestre"]; ?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">editar</a>
                            <a href="" class="btn btn-sm btn-danger">eliminar</a>
                        </td>
                    </tr>

                   <?php } ?>
                </tbody>
                </table><?php } else  {?> 
                <h2>no exiate datos de alumnos en la base de datos</h2>
                <?php } ?> 
            </div>
        </div>
    </div>

<footer class="text-center"><hr>
<span>cetis 107 web app &copy; 2023</span>
</footer>
    
<script src="js/bootstrap.js"></script>
</body>
</html>