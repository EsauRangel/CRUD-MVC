<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>

<body>
    <?php require "view/header.php" ?>
    <div class="center">
        <h1>Seccion de Consulta</h1>
        <table width="50%" border="1px solid black">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apelldio</th>
                </tr>
            </thead>
            <tbody id="tbody-alumnos">
                <?php
                foreach ($this->alumnos as $row) {
                    $alumno = new Alumno();
                    $alumno = $row;

                ?>
                    <tr id="fila-<?php echo $alumno->matricula; ?>">
                        <td><?php echo $alumno->matricula;  ?></td>
                        <td><?php echo $alumno->nombre;  ?></td>
                        <td><?php echo $alumno->apellido;  ?></td>
                        <td><a href="<?php echo constant('URL'). 'consulta/verAlumno/' . $alumno->matricula?>">Editar</a></td>
                        <td><button class="bEliminar" data-matricula="<?php echo $alumno->matricula;  ?>">Eliminar</button></td>
                       

                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </div>
    <?php require "view/footer.php"; ?>

    <script type="text/javascript" src="<?php echo constant('URL');?>public/js/main.js"></script>
</body>
</html>