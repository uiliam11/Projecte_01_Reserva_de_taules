<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testeo intesivo</title>
</head>
<body>
  

<form action="../functions/actualizar.php" method="POST">
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
                <select name="mesa">
                    <option value="1" selected>Mesa 1</option>
                    <option value="2">Mesa 2</option>
                    <option value="3">Mesa 3</option>
                </select>
                <br>
                <button type="submit">Enviar</button>
                <br>
            </form>
</body>
</html>