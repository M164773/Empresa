<?php
    include_once('assets/php/registro.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="header">
        <h1>EMPRESA</h1>
    </div>
    <h2>Añadir Empleados</h2>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="idNombre">Nombre</label><br>
        <input type="text" name="txtNombre" id="idNombre" required placeholder="Escriba el nombre" pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$"><br>
        <label for="idApellido">Apellido</label><br>
        <input type="text" name="txtApellido" id="idApellido" required placeholder="Escriba el apellido" pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$"><br>
        <label for="idEdad">Edad</label><br>
        <input type="number" name="txtEdad" id="idEdad" required placeholder="Escriba la edad" min="18" max="99"><br>
        <label for="idEstadoCivil">Estado Civil</label><br>
        <select name="txtEstadoCivil" id="idEstadoCivil" required placeholder="Seleccione el estado civil">
            <option value="S">Soltero(a)</option>
            <option value="C">Casado(a)</option>
            <option value="V">Viudo(a)</option>
        </select><br>
        <label for="idSexo">Sexo</label><br>
        <select name="txtSexo" id="idSexo" required placeholder="Seleccione el sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>
        <label for="idSueldo">Sueldo</label><br>
        <input type="number" name="txtSueldo" id="idSueldo" required placeholder="Escriba el sueldo (Hasta 10000 Bs)" min="100" max="10000"><br><br>
        <input type="submit" value="Registro" name="btn">
    </form>
    <hr>
    <h2>Solicitud de Datos</h2>
    <div class="botones-datos">
        <form <?php $_SERVER['PHP_SELF'] ?> method="POST">
            <input type="submit" value="Total de empleados femeninos" name="P1">
        </form>
    </div><br>
    <input type="number" readonly value="<?php echo $p1; ?>"><br>
    <div class="botones-datos">
        <form <?php $_SERVER['PHP_SELF'] ?> method="POST">
            <input type="submit" value="Total de hombres casados que ganan más de 2500Bs" name="P2">
        </form>
    </div><br>
    <input type="number" readonly value="<?php echo $p2; ?>"><br>
    <div class="botones-datos">
        <form <?php $_SERVER['PHP_SELF'] ?> method="POST">
            <input type="submit" value="Total de mujeres viudas que ganan más de 1000Bs" name="P3">
        </form>
    </div><br>
    <input type="number" readonly value="<?php echo $p3; ?>"><br>
    <div class="botones-datos">
        <form <?php $_SERVER['PHP_SELF'] ?> method="POST">
            <input type="submit" value="Edad promedio de los hombres" name="P4">
        </form>
    </div><br>
    <input type="number" readonly value="<?php echo $p4; ?>"><br>
    <div class="footer">
        <h2>&copy; Todos los derechos reservados. 2023.</h2>
    </div>
</body>
</html>