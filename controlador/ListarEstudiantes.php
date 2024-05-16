<?php 

include ("bd.php");

$Consulta = "SELECT * FROM estudiantes";

$Resultado = False;
try {
  $Resultado = mysqli_query($Conexion, $Consulta);
        }
 catch (Exception $e)
     { $Mensaje = "No se pudo consultar el estudiante";
        // $error = $e -> getMessage();
        //print $e -> getMessage();
        //print $Resultado;
     }
 if($Resultado == False) { $Mensaje = "No se pudo consultar el estudiante";
                 //die($mysqli_error($Conexion));
             }
 else { 
    echo '<table border="1">
    <tr>
        <td>Codigo del estudiante</td>
        <td> Primer nombre</td>
        <td>Segundo nombre</td>
        <td>Primer apellido</td>
        <td>Segundo apellido</td>
        <td>Curdo</td>
        <td>especialidad</td>
        <td>proyecto</td>
        <td>Fecha de nacimiento</td>
        <td colspan = "2">Acciones</td>
    </tr>';
    while($Registro=$Resultado->fetch_assoc()){
        echo '
        <tr>
            <td>'.$Registro["Codigo_Estudiante"].'</td>
            <td>'.$Registro["Primer_Nombre"].'</td>
            <td>'.$Registro["Segundo_Nombre"].'</td>
            <td>'.$Registro["Primer_Apellido"].'</td>
            <td>'.$Registro["Segundo_Apellido"].'</td>
            <td>'.$Registro["Curso"].'</td>
            <td>';
            include("NombreEspecialidad.php");
            echo'</td>
            <td>';
            include("NombreProyecto.php");
            echo'</td> 
            <td>'.$Registro["Fecha_Nacimiento"].'</td>
            <td><a href="ActualizacionEstudiantes.php?Codigo_Estudiante='.$Registro["Codigo_Estudiante"].'"> Editar</a></td>
            <td><a href= "#" onclick="preguntar('.$Registro["Codigo_Estudiante"].')">Eliminar</a></td>
        </tr>';
    }//fin del ciclo de listado de estudiantes
    echo '</table>';
 }
 
?>

<script type="text/javascript">
    function preguntar(Codigo_Estudiante)
    {
        if(confirm("¿Esta seguro de eliminar el estudiante con codigo "+Codigo_Estudiante+" ?"))
        {
            window.location.href = "Estudiantes.php?Codigo_Estudiante="+Codigo_Estudiante;
        }

    }
</script>
