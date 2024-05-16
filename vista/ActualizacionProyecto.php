<?php 
    include("Navegacion.php");
    echo "<h1>ACTUALIZAR PROYECTO</h1>";
    include ("../controlador/ActualizarProyecto.php");
    echo '
    <form action="ActualizacionProyecto.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["Codigo_Proyecto"].'">
        <label for="Codigo_Proyecto">Codigo proyecto:</label>
        <input type="number" name="Codigo_Proyecto" id="Codigo_Proyecto" value="'.$Registro["Codigo_Proyecto"].'"><br>
        <label for="Nombre_Proyecto">Nombre de proyecto:</label>
        <input type="text" name="Nombre_Proyecto" id="Nombre_Proyecto" value="'.$Registro["Nombre_Proyecto"].'"><br>
        <label for="Resumen">Resumen:</label>
        <textarea type="text" name="Resumen" id="Resumen" value="'.$Registro["Resumen"].'"></textarea><br>
        <br>
        <label for="Fecha_Registro:">Fecha registro:</label>
        <input type="date" name="Fecha_Registro" id="Fecha_Registro" value="'.$Registro["Fecha_Registro"].'">
        <br>
        <button type="submit">Actualizar Proyecto</button>
    </form>';
    include("Footer.php");
?>                         