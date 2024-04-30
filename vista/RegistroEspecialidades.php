<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de proyectos</title>
</head>
<body>
    <h1>Registro de Especialidades</h1>

    <?php include ("../controlador/RegistrarEspecialidad.php"); ?>

    <form action="RegistroEspecialidades.php" method="post">
       <label for="Codigo">Codigo de Especialidad:</label>
       <input type="number" name="Codigo" id="Codigo"><br>
       <label for="NombreEspecialidad">Nombre de Especialidad:</label>
       <input type="text" name="NombreEspecialidad" id="NombreEspecialidad"><br>
        <button type="submit">Registrar Especialidad</button>
    </form>
</body>
</html>