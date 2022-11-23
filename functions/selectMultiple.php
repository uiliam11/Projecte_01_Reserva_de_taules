<?php
require_once '../config/conexion.php';

// RECOGER QUE QUIERE HACER EL USUARIO Y SOBRE QUE SALA:
$sala = $_POST['sala-option'];
$modo = $_POST['modo-option'];

// CAMBIAR EL ESTADO DE LAS MESAS DE ESA SALA:
$sql = "UPDATE `tbl_mesa` SET `disponibilidad` = '$modo' WHERE `ubicacion` = '$sala';";
mysqli_query($conexion,$sql);

echo "<script>location.href = '../view/inicio.php'</script>";