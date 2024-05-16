<?php 

include ("bd.php");
if(!empty($_GET["Codigo_Especialidad"])){

$Codigo_Especialidad = $_GET["Codigo_Especialidad"];
$ConsultaEsp = "DELETE FROM especialidad WHERE especialidad.Codigo_Especialidad =" .$Codigo_Especialidad;

//echo $ConsultaEsp;

$ResultadoEsp = False;
try {
  $ResultadoEsp = mysqli_query($Conexion, $ConsultaEsp);
        }
 catch (Exception $e)
     { $Mensaje = "No se pudo eliminar la especialidad con codigo: " .$Codigo_Especialidad;
        // $error = $e -> getMessage();
        //print $e -> getMessage();
        //print $Resultado;
     }
 if($ResultadoEsp == False) { $Mensaje = "No se pudo consultar la especialidad";
                 //die($mysqli_error($Conexion));
             }
 else { $Mensaje = "se elimino la especialidad con codigo: ".$Codigo_Especialidad;}
 echo $Mensaje;
            }
?>