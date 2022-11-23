<?php
require_once '../config/conexion.php';

$mesa = $_POST['mesas-option'];
$ocu = $_POST['ocu-option'];

$sql = "UPDATE `tbl_mesa` SET `capacidad` = '$ocu' WHERE `id_mesa` = '$mesa';";
mysqli_query($conexion,$sql);

echo "<script>location.href = '../view/inicio.php'</script>";