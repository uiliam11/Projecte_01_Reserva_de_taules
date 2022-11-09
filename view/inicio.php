<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../img/favicon/safari-pinned-tab.svg" color="#bababa">
    <meta name="msapplication-TileColor" content="#bababa">
    <meta name="theme-color" content="#bababa">
    <!-- Link font awesome -->
    <script src="https://kit.fontawesome.com/2b5286e1aa.js" crossorigin="anonymous"></script>
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="../css/inicioStyles.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../css/style.css">
    <!--  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <?php
    require_once '../functions/funciones.php';
    validarSesion();
    ?>

    <!-- NAVBAR -->
    <div class="region-navbar">
        <nav class="widget-navbar">
            <ul>
                <li><a id="btn_salon" href="#">Salón</a></li>
                <li><a id="btn_terraza" href="#">Terraza</a></li>
                <li><a id="btn_privada-1" href="#">Sala Privada 1</a></li>
                <li><a id="btn_privada-2" href="#">Sala Privada 2</a></li>
                <li class="justify-end"><a href="../functions/cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
            <!-- <div id="nav-container">
                <div class="toggle-icon">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div> -->
        </nav>
    </div>
    <!-- MAPAS RESTAURANTE -->
    <div class="region-rest">
        <div class="widget-rest" id="salon">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="cont"><button id="1" class="btn-close trigger"></button></div></td>
                    <td></td>
                    <td><div class="cont"><button id="2" class="btn-close trigger"></button></div></td>
                    <td></td>
                    <td><div class="cont"><button id="3" class="btn-close trigger"></button></div></td>
                    <td></td>
                    <td colspan="2"><div class="cont"><button></button></div></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><div class="cont"><button></button></div></td>
                    <td></td>
                    <td><div class="cont"><button></button></div></td>
                    <td></td>
                    <td colspan="2"><div class="cont"><button></button></div></td>
                    <td></td>
                    <td colspan="3"><div class="cont"><button></button></div></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="widget-rest" id="terraza">
            <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                        <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div class="cont"><button></button></div></td>
                        <td></td>
                        <td colspan="2"><div class="cont"><button></button></div></td>
                        <td></td>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair rotar270"></i></div></td></td>
                        <td><div class="cont"><button></button></div></td>
                        <td><div class="cont"><i class="fa-solid fa-chair rotar90"></i></div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                        <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td>
                        <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td></td>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair"></i></div></td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2"><div class="cont"><button></button></div></td>
                        <td></td>
                        <td><div class="cont"><button></button></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                        <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                        <td></td>
                        <td><div class="cont"><i class="fa-solid fa-chair rotar180"></i></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> 
            </table>
        </div>
        <div class="widget-rest" id="sala-privada-1">
            
        </div>
        <div class="widget-rest" id="sala-privada-2">
            
        </div>
    </div>
<!-- Modal -->
<div class="page-wrapper">
        <!-- <a class="btn trigger" href="#">click me</a> -->
    </div>

    <!-- Modal -->
    <div class="modal-wrapper">
        <div class="modal">
            <div class="head">
                <a class="btn-close trigger" href="#">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
            <div class="content">
                <div class="good-job">
                    <!-- CONTENIDO -->
                    <h1>Reserva!</h1>
                    <form action="../functions/actualizar.php" method="post">
                    <label>Nombre</label>
                    <input type="text" name="nombre">
                    <br>
                    <label>Apellido</label>
                    <input type="text" name="apellido">
                    <br>
                    <label>Telefono</label>
                    <input type="text" name="tel">
                <br>
                <select name="select">
                    <option value="Libre" selected>Libre</option>
                    <option value="Ocupado  ">Ocupado</option>
                    <option value="mantenimiento">Mantenimiento</option>
                </select>
                <input type="hidden" name="id_mesa" id="id_mesa>
                <br>
                <button type="submit">Enviar</button>
                <br>
            </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Script hamburguesa navbar -->
<script src="../js/abrirNavbar.js"></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src="../js/functions.js"></script>
</html>