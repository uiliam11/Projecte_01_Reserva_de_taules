<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- BOTON INSERTAR MANTENIMIENTO -->
    <button><a href="./form_crear.php">Crear Mantenimiento</a></button>
    <!--  -->

    <?php
    require_once '../config/conexion.php';

    $sql = "SELECT * FROM `tbl_man`;";
    $listado_mantenimiento = mysqli_fetch_all(mysqli_query($conexion, $sql));

    foreach ($listado_mantenimiento as $mantenimiento) {
        for ($i=0; $i < count($mantenimiento); $i++) { 
            echo "<p>".$mantenimiento[$i]."</p>"; // Mostramos a los camareros
        }
        echo "<br>";
    }

    ?>

</body>
</html>