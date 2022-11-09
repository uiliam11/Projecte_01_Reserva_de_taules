<?php
function login($username, $password) {
    require "../config/conexion.php";

    session_start();

    if (!$conexion) {
        echo "ERROR DE CONEXION CON LA BASE DE DATOS";
        echo "<a href='../index.php'>Volver</a>";
        die;
    }

    // Sentencia para ver si ese usuario que nos han introducido es un camarero
    $query1 = "SELECT * FROM tbl_user WHERE username = '{$username}' AND password = '{$password}'";
    $valid_login1 = mysqli_query($conexion, $query1);
    $match1 = $valid_login1 -> num_rows;
    
    // print_r($match1);

    if ($match1 === 1) {
        foreach ($valid_login1 as $key => $user) {
            // var_dump($user);
            $_SESSION['username_admin'] = $user['username'];
            $_SESSION['id_user'] = $user['id_user'];

        }
        echo "<script>location.href = '../view/inicio.php';</script>";
    } else {
        
        // Sentencia para ver si ese usuario que nos han introducido es un técnico de mantenimiento
        $query = "SELECT * FROM tbl_man WHERE username = '{$username}' AND password = '{$password}'";
        $valid_login = mysqli_query($conexion, $query);
        $match = $valid_login -> num_rows;

        if ($match === 1) {
            foreach ($valid_login as $key => $user) {
                $_SESSION['id_prof'] = $user['id'];
            }
            echo "<script>location.href = '../view/man.php';</script>";
        }else {
            echo "<script>location.href = '../index.php';</script>";
        }
    }
}

function validarSesion() {
    // FUNCIÓN PARA VALIDAR LA SESIÓN (INCLUIR EN CADA PÁGINA)
    session_start();
    if (!isset($_SESSION['username_admin'])) {
        echo "<script>window.location.href = '../index.php?error=errorSesion';</script>";
    }
}