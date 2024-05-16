<?php 
include("Navegacion.php");
echo "<h1>REGISTRAR ESTUDIANTE</h1>";
include ("../controlador/RegistrarEstudiantes.php"); 
echo '<form action="RegistroEstudiantes.php" method="post">
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
    <label for="Codigo_Epecialidad">Especialidad:</label>';
    include("../controlador/ComboEspecialidades.php");
echo '   <br>
    <label for="Codigo_Proyecto">Proyecto:</label>';
    include("../controlador/ComboProyectos.php"); 
echo '    <br>
    <label for="Fecha_Nacimiento:">Fecha de Nacimiento:</label>
    <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento"><br>
    <button type="submit">Registrar Estudiante</button>
</form>';

include("Footer.php");
?>