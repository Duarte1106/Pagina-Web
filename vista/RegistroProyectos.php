<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de proyectos</title>
</head>

<body>
    <h1>Registro de Proyectos</h1>

    <?php include ("../controlador/RegistrarProyecto.php"); ?>

    <form action="RegistroProyectos.php" method="post">
        <label for="Codigo_Proyecto">Codigo proyecto:</label>
        <input type="number" name="Codigo_Proyecto" id="Codigo_Proyecto"><br>
        <label for="Nombre_Proyecto">Nombre de proyecto:</label>
        <input type="text" name="Nombre_Proyecto" id="Nombre_Proyecto"><br>
        <label for="Resumen">Resumen:</label>
        <textarea type="text" name="Resumen" id="Resumen"></textarea><br>
        <br>
        <label for="Fecha_Registro:">Fecha registro:</label>
        <input type="date" name="Fecha_Registro" id="Fecha_Registro">
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>