<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar materia</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php'; 
        include 'conexion.php';

        $id = $_GET["id"];

        $sql = "SELECT * FROM materias WHERE id=".$id;

        $datos = $conexion->query($sql);
        
        $materia = $datos->fetch_assoc();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <h2>Registrar materia</h2><hr>
                <form action="Actualizarmateria.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $materia["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $materia["nombre"]; ?>" name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del materia" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input value="<?php echo $materia["semestre"]; ?>" name="semestre" type="number" class="form-control" placeholder="Teclea el semestre" required>
                    </div>
                    <div class="form-group">
                        <label for="">especialidad:</label>
                        <select name="especialidad" class="form-control" required>
                            <option value="">Selecciona el especialidad</option>
                            <option selected value="<?php echo $materia["especialidad"]; ?>"><?php echo $materia["especialidad"]; ?></option>
                            <option value="PROGRAMACION">PROGRAMACION</option>
                            <option value="OFIMATICA">OFIMATICA</option>
                            <option value="CONSTRUCCION">CONSTRUCCION</option>
                            <option value="ELECTRONICA">ELECTRONICA</option>
                            <option value="DISEÑO GRAFICO">DISEÑO GRAFICO</option>
                            <option value="CONTABILIDAD">CONTABILIDAD</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                        <a href="consultarMaterias.php" class="btn btn-danger">Cancelar</a>
                    </div>
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