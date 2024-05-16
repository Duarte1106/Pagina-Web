<?php 

include ("bd.php");

$Consulta = "SELECT * FROM proyectos";

$Resultado = False;
try {
  $Resultado = mysqli_query($Conexion, $Consulta);
        }
 catch (Exception $e)
     { $Mensaje = "No se pudo consultar el proyecto";
        // $error = $e -> getMessage();
        //print $e -> getMessage();
        //print $Resultado;
     }
 if($Resultado == False) { $Mensaje = "No se pudo consultar el proyecto";
                 //die($mysqli_error($Conexion));
             }
 else { 
    echo '<table border="1">
    <tr>
        <td>Codigo del Proyecto</td>
        <td>Nombre del Proyecto</td>
        <td>Resumen</td>
        <td>Fecha de Registro</td>
        <td colspan = "2">Acciones</td>
    </tr>';
    while($Registro=$Resultado->fetch_assoc()){
        echo '
        <tr>
            <td>'.$Registro["Codigo_Proyecto"].'</td>
            <td>'.$Registro["Nombre_Proyecto"].'</td>
            <td>'.$Registro["Resumen"].'</td>
            <td>'.$Registro["Fecha_Registro"].'</td>
            <td><a href="ActualizacionProyecto.php?Codigo_Proyecto='.$Registro["Codigo_Proyecto"].'"> Editar</a></td>
            <td><a href= "#" onclick="preguntar('.$Registro["Codigo_Proyecto"].')">Eliminar</a></td>
        </tr>';
    }//fin del ciclo de listado de especialidades
    echo '</table>';
 }
 
?>


<script type="text/javascript">
    function preguntar(Codigo_Proyecto)
    {
        if(confirm("¿Esta seguro de eliminar el proyecto con codigo "+Codigo_Proyecto+" ?"))
        {
            window.location.href = "Proyectos.php?Codigo_Proyecto="+Codigo_Proyecto;
        }

    }
</script>