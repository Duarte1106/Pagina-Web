<?php
include ("bd.php");

$Consulta = "SELECT * FROM especialidad";

$Resultado = False;
try {
  $Resultado = mysqli_query($Conexion, $Consulta);
        }
 catch (Exception $e)
     { $Mensaje = "No se pudo consultar la especialidad";
        // $error = $e -> getMessage();
        //print $e -> getMessage();
        //print $Resultado;
     }
 if($Resultado == False) { $Mensaje = "No se pudo consultar la especialidad";
                 //die($mysqli_error($Conexion));
             }
 else { 
    echo '<table border="1">
    <tr>
        <td>Codigo de Especialidad</td>
        <td>Nombre de Especialidad</td>
        <td colspan = "2">Acciones</td>
    </tr>';
    while($Registro=$Resultado->fetch_assoc()){
        echo '
        <tr>
            <td>'.$Registro["Codigo_Especialidad"].'</td>
            <td>'.$Registro["Nombre_Especialidad"].'</td>
            <td><a href="ActualizacionEspecialidad.php?Codigo_Especialidad='.$Registro["Codigo_Especialidad"].'"> Editar</a></td>
            <td><a href= "#" onclick="preguntar('.$Registro["Codigo_Especialidad"].')">Eliminar</a></td>
        </tr>';
    }//fin del ciclo de listado de especialidades
    echo '</table>';
 }
 
?>

<script type="text/javascript">
    function preguntar(Codigo_Especialidad)
    {
        if(confirm("¿Esta seguro de eliminar la especialidad con codigo "+Codigo_Especialidad+" ?"))
        {
            window.location.href = "Especialidades.php?Codigo_Especialidad="+Codigo_Especialidad;
        }

    }
</script>