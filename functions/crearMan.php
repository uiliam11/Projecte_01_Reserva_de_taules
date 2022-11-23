<?php
require_once '../config/conexion.php';
// RECOGER EN VARIABLES LOS DATOS DEL FORMULARIO:

$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$username = $_POST['username'];
$password = $_POST['password'];

// SENTENCIA PARA INSERTAR ESTE USUARIO:

$sql = "INSERT INTO `tbl_man`(`id_man`, `nombre_man`, `dni`, `username`, `password`) VALUES (null,'$nombre','$dni','$username','$password')";
mysqli_query($conexion,$sql);

// REDIRECION A LA PAGINA OTRA VEZ

echo "<script>location.href = '../view/mantenimiento.php'</script>";