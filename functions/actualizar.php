<?php 
require "../config/conexion.php";
session_start();
$_SESSION['id_user'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tel = $_POST['tel'];
$disponibilidad = $_POST['select'];
$mesa = $_POST['mesa'];
$id_user = $_SESSION['id_user'];

$query1 = "SELECT * FROM tbl_mesa WHERE id_mesa = $mesa  AND disponibilidad = '$disponibilidad'";

$valid_login = mysqli_query($conexion, $query1);
$match = $valid_login -> num_rows;

if ($match === 1){
echo "La mesa ya está ocupada";
}else{
    mysqli_autocommit($conexion,false);

    try{
        
        mysqli_begin_transaction($conexion, MYSQLI_TRANS_START_READ_WRITE);
        $stmt = mysqli_stmt_init($conexion);
        $sql1 = "INSERT INTO `tbl_reserva`(`id_reserva`, `id_user`, `id_mesa`, `nom_persona`, `apellido_persona`, `telefono_persona`, `hora_inici`, `hora_fi`) VALUES (null, $id_user, $mesa, '$nombre', '$apellido','$tel', current_timestamp(), null)";
        mysqli_stmt_prepare($stmt, $sql1);
        mysqli_stmt_execute($stmt);
        $id =mysqli_insert_id($conexion);

        $stmt = mysqli_stmt_init($conexion);
        $sql2 = "UPDATE `tbl_mesa` SET `disponibilidad`='$disponibilidad' WHERE id_mesa = $mesa";
        mysqli_stmt_prepare($stmt, $sql2);
        mysqli_stmt_execute($stmt);
        if (0 === error_reporting()) {
            return false;
        }
        mysqli_commit($conexion);
        mysqli_stmt_close($stmt);

    }
    catch(Exception $e){
        mysqli_rollback($conexion);
        echo $e->getMessage(), "\n";
        echo "Error al insertar el  registro";
    }

}
