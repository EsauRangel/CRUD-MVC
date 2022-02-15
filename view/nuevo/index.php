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
    <div class="center"><h1>Seccion de nuevo</h1>
    <div class="center"><?php echo $this->mensaje; ?></div>
        <form id="miForm"     method="POST">
            <p>
                <label for="matricula">Matricula</label><br>
                <input type="text" name="matricula" id="matricula" required><br>
            </p>
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="nombre" required><br>
            </p>
            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" id="apellido" required><br>
            </p>
            
        </form>
        <p>
                <button id="bRegistrar">Registar</button>
            </p>
    </div>
    <?php require "view/footer.php"; ?>
    <script src="<?php echo constant('URL');?>public/js/insert.js"></script>
</body>
</html>