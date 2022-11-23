<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input class="form-control form-control-sm filter" id="filtro-id" name="filtro-id" type="text" placeholder="Id"><!--FILTRO ID DE LA MESA-->
        <input class="form-control form-control-sm filter" id="filtro-nombre" name="filtro-nombre" type="text" placeholder="Nombre"> <!--FILTRO UBICACIÓN-->
        <input class="form-control form-control-sm filter" id="filtro-apellido" name="filtro-apellido" type="text" placeholder="Apellido"> <!--FILTRO CLIENTE-->
        <input class="form-control form-control-sm filter" id="filtro-username" name="filtro-username" type="text" placeholder="Username"> <!--FILTRO CLIENTE-->
        <input class="enviar" name="btn_filtro" type="submit" value="Enviar">
    </form>
    <?php
    require_once '../config/conexion.php';

    if (isset($_GET['btn_filtro'])) {
        $id = $_GET['filtro-id'];
        $nombre = $_GET['filtro-nombre'];
        $apellido = $_GET['filtro-apellido'];
        $username = $_GET['filtro-username'];
    } else {
        $id = '';
        $nombre = '';
        $username = '';
        $apellido = '';
    }

    $sql = "SELECT * FROM `tbl_user` WHERE id_user LIKE '%".$id."%' AND nombre_user LIKE '%".$nombre."%' AND username LIKE '%".$username."%' AND apellido_user LIKE '%".$apellido."%';";

    $listado_camareros = mysqli_fetch_all(mysqli_query($conexion, $sql));

    foreach ($listado_camareros as $camareros) {
        for ($i=0; $i < count($camareros); $i++) { 
            echo "<p>".$camareros[$i]."</p>"; // Mostramos a los camareros
        }
        echo "<br>";
    }

    ?>

</body>
</html>