<?php

include("bd.php");
if (!empty($_GET["Codigo_Especialidad"])){
    $Consulta = "select * from especialidad where Codigo_Especialidad = ".$_GET["Codigo_Especialidad"];
    $Resultado = False;
   try {
     $Resultado = mysqli_query($Conexion, $Consulta);
    }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar la especialidad con codigo".$_GET["Codigo_Especialidad"];
            //$error = $e -> getMessage();
           //print $e -> getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar la especialidad con codigo".$_GET["Codigo_Especialidad"];
                    //die($mysqli_error($Conexion));
                } 
    else { $Mensaje = "Se pudo consultar la especialidad con codigo".$_GET["Codigo_Especialidad"];}
 $Registro = $Resultado -> fetch_assoc();   
} //

else if (!empty($_POST["Codigo_Especialidad"]) && !empty($_POST["Nombre_Especialidad"])){
    $Codigo_Especialidad = $_POST["Codigo_Especialidad"];
    $Nombre_Especialidad = $_POST["Nombre_Especialidad"];
    
    $Consulta = "UPDATE especialidad SET Codigo_Especialidad = '".$Codigo_Especialidad."', Nombre_Especialidad = '".$Nombre_Especialidad."' WHERE especialidad.Codigo_Especialidad = ".$_POST["CodigoActual"];
    
    //echo $Consulta;
    
    $Resultado = False;
   try {
     $Resultado = mysqli_query($Conexion, $Consulta);
    }
    catch (Exception $e)
        { $Mensaje = "No se pudo actualizar la especialidad por error en los datos";
            //$error = $e -> getMessage();
           //print $e -> getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo actualizar la especialidad";
                    //die($mysqli_error($Conexion));
                }
    else { $Mensaje = "la especialidad se actualizo correctamente";
    header('Location: Especialidades.php');
    }
    
} // fin del if 
else {
    $Mensaje = "<h3>El codigo y nombre de especialidad son obligatorios</h3>";
}     
echo "<h3>".$Mensaje. "<h3/>" ;

//$EtudianteActualizacion = $Resultado -> fetch_assoc();
//echo $EstudianteActualizando["NombreEspecialidad"]

?>