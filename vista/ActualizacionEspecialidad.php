<?php
    include("Navegacion.php");
    echo "<h1>ACTUALIZAR ESPECIALIDAD</h1>";
    include ("../controlador/ActualizarEspecialidad.php"); 
    echo '
    <form action="ActualizacionEspecialidad.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["Codigo_Especialidad"].'">
       <label for="Codigo_Especialidad">Codigo de Especialidad:</label>
       <input type="number" name="Codigo_Especialidad" id="Codigo_Especialidad" value="'.$Registro["Codigo_Especialidad"].'"><br>
       <label for="Nombre_Especialidad">Nombre de Especialidad:</label>
       <input type="text" name="Nombre_Especialidad" id="Nombre_Especialidad" value="'.$Registro["Nombre_Especialidad"].'"><br>
        <button type="submit">Actualizar Especialidad</button>
    </form>';
    include("Footer.php");
?>
