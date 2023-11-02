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
  <?php include 'menu.php'; ?>
  <div class="container">
    <div class="row">
        <div class="col-12">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">nombre</label>
                    <input name="nombre" type="text" class="form-control" placeholder="teclea el nombre de alumno" required>
                </div>
                <div class="form-group">
                    <label for="">numero_control</label>
                    <input name="numero_control" type="text" class="form-control" placeholder="teclea el numero de control"  required>
                </div>
                <div class="form-group">
                    <label for="">semestre</label>
                    <input name="semestre" type="text" class="form-control" placeholder="teclea el semestre
                    "  required>
                </div>
                <div class="form-group">
                    <label for="">edad</label>
                    <input name="edad" type="text" class="form-control" placeholder="teclea la edad"  required>
                </div>
                <div class="form-group">
                    <label for="">turno</label>
                    <select name="turno" class="form-control"  required>
                    <option value="">seleccions el turno</option>
                    <option value="MATUTINO">MATUTINO</option>
                    <option value="VESPERTINO">VESPERTINO</option>
</select>
                </div>
                <div class="form-group">
                    <label for="">sexo</label>
                    <select name="sexo" class="form-control"  required>
                    <option value="">seleccions el sexo</option>
                    <option value="1">FEMENINO</option>
                    <option value="2">MASCULINO</option>
                    <option value="3">GAY</option>
</select>
                </div> <br>
                <div>
                    <input type="submit" value="registrar" class="btn btn-primary">
                    <a href="consultaralumnos.php" class="btn btn-danger">cancelar</a>
                </div>
            </form>
        </div>
    </div>
  </div>



  <footer class="text-center"><hr>
<span>cetis 107 web app &copy; 2023</span>
</footer>

<script src="js/bootstrap.bundle.js"></script>
</body>
</html>