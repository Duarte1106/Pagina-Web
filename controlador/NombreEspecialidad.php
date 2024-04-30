<?php
include ("bd.php");

$ConsultaE = "SELECT * FROM especialidad where Codigo_Especialidad='".$Registro["Codigo_Especialidad"]."'";

$ResultadoE = False;
try {
  $ResultadoE = mysqli_query($Conexion, $ConsultaE);
        }
 catch (Exception $e)
     { $Mensaje = "No se pudo consultar la especialidad";
        // $error = $e -> getMessage();
        //print $e -> getMessage();
        //print $Resultado;
     }
 if($ResultadoE == False) { $Mensaje = "No se pudo consultar la especialidad";
                 //die($mysqli_error($Conexion));
             }
 else { 
   $RegistroE=$ResultadoE->fetch_assoc();
   echo $RegistroE["Nombre_Especialidad"];
 }
 
?>