<?php 
require "../connection/conexion.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tel = $_POST['tel'];
$reserva = $_POST['select'];
$mesa = $_POST['mesa'];


$query1 = "SELECT * FROM tbl_mesa WHERE id_mesa = $mesa  AND disponibilidad = '$reserva'";
$valid_login = mysqli_query($conexion, $query1);
$match = $valid_login -> num_rows;
if ($match === 1){
echo "La mesa ya está ocupada";
}else{
    $sql = "UPDATE `tbl_mesa` SET `disponibilidad`='$reserva' WHERE id_mesa = $mesa";
    mysqli_query($conexion,$sql);
}
