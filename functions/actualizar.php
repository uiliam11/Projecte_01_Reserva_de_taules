<?php 
require "../config/conexion.php";
session_start();

// Recoger variables tanto de POST como de la SESSION
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tel = $_POST['tel'];
$mesa = $_POST['mesa'];
$id_user = $_SESSION['id_user'];

// Recoger la varibale disponibilidad:
if (isset($_POST['Ocupado'])) {
    $disponibilidad = 'Ocupado';
} elseif(isset($_POST['Libre'])) {
    $disponibilidad = 'Libre';
} elseif(isset($_POST['Averiado'])) {
    $disponibilidad = 'Averiado';
}


if ($disponibilidad == 'Ocupado') {

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
            $id = mysqli_insert_id($conexion);
    
            $stmt = mysqli_stmt_init($conexion);
            $sql2 = "UPDATE `tbl_mesa` SET `disponibilidad`='$disponibilidad' WHERE id_mesa = $mesa";
            mysqli_stmt_prepare($stmt, $sql2);
            mysqli_stmt_execute($stmt);
            if (0 === error_reporting()) {
                return false;
            }
            mysqli_commit($conexion);
            mysqli_stmt_close($stmt);
            echo "<script>location.href = '../view/inicio.php'</script>";

        }
        catch(Exception $e){
            mysqli_rollback($conexion);
            echo $e->getMessage(), "\n";
            echo "Error al hacer la reserva!";
        }
    }
} elseif ($disponibilidad == 'Averiado') {
    $query1 = "SELECT * FROM tbl_mesa WHERE id_mesa = $mesa  AND disponibilidad = '$disponibilidad'";
    $valid_login = mysqli_query($conexion, $query1);
    $match = $valid_login -> num_rows;
    if ($match === 1){
        echo "La mesa esta averiada!";
    } else {
        mysqli_autocommit($conexion,false);
        try{
            mysqli_begin_transaction($conexion, MYSQLI_TRANS_START_READ_WRITE);
            $stmt = mysqli_stmt_init($conexion);
            $sql1 = "";

        } catch(Exception $e){
            mysqli_rollback($conexion);
            echo $e->getMessage(), "\n";
            echo "ERROR!";
        }
    }
} elseif ($disponibilidad == 'Libre') {
    $query1 = "SELECT * FROM tbl_mesa WHERE id_mesa = $mesa  AND disponibilidad = '$disponibilidad'";
    $valid_login = mysqli_query($conexion, $query1);
    $match = $valid_login -> num_rows;
    if ($match === 1){
        echo "La mesa ya está Libre";
    }else{
        mysqli_autocommit($conexion,false);
        try{
            mysqli_begin_transaction($conexion, MYSQLI_TRANS_START_READ_WRITE);
            $stmt = mysqli_stmt_init($conexion);
            $sql1 = "UPDATE `tbl_reserva` SET `hora_fi`= current_timestamp(), `duracion` = TIMEDIFF(`hora_fi`, `hora_inici`)    WHERE id_mesa = $mesa and `hora_fi` is null";
            mysqli_stmt_prepare($stmt, $sql1);
            mysqli_stmt_execute($stmt);
            $id = mysqli_insert_id($conexion);
            $stmt = mysqli_stmt_init($conexion);
            $sql2 = "UPDATE `tbl_mesa` SET `disponibilidad`='$disponibilidad' WHERE id_mesa = $mesa";
            mysqli_stmt_prepare($stmt, $sql2);
            mysqli_stmt_execute($stmt);
            if (0 === error_reporting()) {
                return false;
            }
            mysqli_commit($conexion);
            mysqli_stmt_close($stmt);
            echo "<script>location.href = '../view/inicio.php'</script>";
        }
        catch(Exception $e){
            mysqli_rollback($conexion);
            echo $e->getMessage(), "\n";
            echo "Error al cerrar la reserva!";
        }
    }
}

echo "<script>location.href = '../view/inicio.php'</script>";
