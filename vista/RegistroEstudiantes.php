<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de Estudiante</title>
</head>
<body>
    <h1>Registro de Estudiante</h1>

    <?php include ("../controlador/RegistrarEstudiantes.php"); ?>

    <form action="RegistroEstudiantes.php" method="post">
        <label for="Codigo_Estudiante">Codigo estudiante: </label>
        <input type="number" name="Codigo_Estudiante" id="Codigo_Estudiante"><br>
        <label for="Primer_Nombre">Primer nombre: </label>
        <input type="text" name="Primer_Nombre" id="Primer_Nombre"><br>
        <label for="Segundo_Nombre">Segundo nombre: </label>
        <input type="text" name="Segundo_Nombre" id="Segundo_Nombre"><br>
        <label for="Primer_Apellido">Primer apellido:</label>
        <input type="text" name="Primer_Apellido" id="Primer_Apellido"><br>
        <label for="Segundo_Apellido">Segundo apellido:</label>
        <input type="text" name="Segundo_Apellido" id="Segundo_Apellido"><br>
        <label for="Curso:">Curso:</label>
        <input type="number" name="Curso" id="Curso"><br>
        <label for="Codigo_Epecialidad">Especialidad:</label>
        <?php include("../controlador/ComboEspecialidades.php"); ?>
        <br>
        <label for="Codigo_Proyecto">Proyecto:</label>
        <?php include("../controlador/ComboProyectos.php"); ?>
        <br>
        <label for="Fecha_Nacimiento:">Fecha de Nacimiento:</label>
        <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento"><br>
        <button type="submit">Registrar Estudiante</button>
    </form>
</body>
</html>