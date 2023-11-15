<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar materias</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'menu.php';
    include 'conexion.php';
    /// recuperamos los datos de la base 
    $sql_alumnos ="SELECT * FROM alumnos";
    $sql_materias ="SELECT * FROM materias";
    $datos_alumnos = $conexion->query($sql_alumnos);
    $datos_materias = $conexion->query($sql_materias);
?>


 <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>asignar materia  a alumnos</h1>
            <form action="guardarAsignacion.php" method="POST">
                <label for="alumnos"></label>
                <select name="alumno" class="form-control">
                    <?php
                    if($datos_alumnos->num_rows > 0){
                        while($registro = $datos_alumnos->fetch_assoc()){?>
                          
                       <option value="<?php echo $registro["ID"]; ?>"><?php echo $registro["nombre"]; ?></option>
                       <?php } ?>
                <?php } ?>
                </select> <br>
                <h3>seleciona materias</h3> <hr>
                <?php
                if ($datos_alumnos->num_rows > 0){
                    while($registro = $datos_materias->fetch_assoc()){ ?>
                    <p><input type="checkbox" name="materias[]" value="<?php echo $registro["id"]; ?>"> <?php echo $registro["nombre"]; ?></p>
                <?php } ?>
            <?php } ?>
            <input type="submit" value="asignar" class="btn btn-primary">
            <a href="" class="btn btn-danger">cancelar</a> 
            </form>
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