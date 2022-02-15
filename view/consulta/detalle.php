<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php  require "view/header.php" ?>
    <div class="center"><h1>Detalle de <?php echo $this->alumno->matricula;  ?></h1>
    <div class="center"><?php echo $this->mensaje; ?></div>
        <form id="form-actualizar" method="POST">
            <p>
                <label for="matricula">Matricula </label><br>
                <input type="text" name="matricula" value="<?php echo $this->alumno->matricula;  ?>" required><br>
            </p>
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" value="<?php echo $this->alumno->nombre; ?>" required><br>
            </p>
            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" value="<?php echo $this->alumno->apellido; ?>"  required><br>
            </p>
            
        </form>
        <p>
               <button id="actualizar">Actualizar</button>
            </p>
    </div>
    <?php require "view/footer.php";?>
    <script src="http://localhost/poo/mvc04/public/js/actualizar.js" ></script>
</body>
</html>