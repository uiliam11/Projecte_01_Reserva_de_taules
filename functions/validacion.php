<?php
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    require_once "../connection/conexion.php";
    require_once "./validar.php";
    $username =  $conexion -> real_escape_string(trim(strip_tags($_POST['username'])));
    $password = sha1($_POST['password']);

    login($username,$password);

} else {

   echo "<script>location.href = '../index.html';</script>";

}
