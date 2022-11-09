<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/estadisticasStyles.css">
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
                <li><a id="volver" href="./inicio.php"><i class="fa-solid fa-arrow-left"></i></a></li>
                <li class="justify-end"><a href="../functions/cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </div>
    <div class="region-rest">
        <div class="widget-rest" id="salon">
            <div class="crud">
            <?php
                require_once '../functions/funciones.php';
                getReservas();

                // MOSTRAR DATOS EN FORMA DE TABLA:
                echo '<table class="tablacrud table table-striped ">';
                    echo '<tr class="bloqueado">';
                        echo '<th id="primero">ID</th>';
                        echo '<th id="titulo">NOMBRE</th>';
                        echo '<th id="titulo">APELLIDOS</th>';
                        echo '<th id="titulo">EMAIL</th>';
                        echo '<th id="titulo">DNI</th>';
                        echo '<th id="titulo">MODIFICAR</th>';
                        echo '<th id="ultimo">ELIMINAR</th>';
                    echo '</tr>';
                    foreach ($listado_estadisticas as $registro) {
                        for ($i=0; $i < count($registro); $i++) { 
                            echo "<td>".$registro[$i]."</td>";
                        }
                    }
                echo '</table>';
                ?>

            </div>
        </div>
    </div>

</body>
</html>