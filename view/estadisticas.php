<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <!-- CSS -->
    <link rel="stylesheet" href="../css/estadisticasStyles.css">
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
            <div style="overflow-x: auto; overflow-y: auto;" class="container">
            <?php
                require_once '../functions/funciones.php';
                // Igualar la función a la variable:
                $listado_estadisticas = getReservas();
                // MOSTRAR DATOS EN FORMA DE TABLA:
                echo '<table class="tablacrud table table-striped ">';
                    echo '<tr class="bloqueado">';
                        echo '<th>ID</th>';
                        echo '<th>UBICACIÓN</th>';
                        echo '<th>CAPACIDAD</th>';
                        echo '<th>CLIENTE</th>';
                        echo '<th>TELÉFONO</th>';
                        echo '<th>ENTRADA</th>';
                        echo '<th>SALIDA</th>';
                    echo '</tr>';
                    foreach ($listado_estadisticas as $registro) {
                        echo "<tr>";
                        for ($i=0; $i < count($registro); $i++) { 
                            echo "<td>".$registro[$i]."</td>";
                        }
                        echo "</tr>";
                    }
                echo '</table>';
                ?>

            </div>
        </div>
    </div>

</body>
</html>