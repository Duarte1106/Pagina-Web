<?php 

include ("bd.php");
if(!empty($_GET["Codigo_Estudiante"])){

$Codigo_Estudiante = $_GET["Codigo_Estudiante"];
$ConsultaDel = "DELETE FROM estudiantes WHERE estudiantes.Codigo_Estudiante =" .$Codigo_Estudiante;

//echo $ConsultaDel;

$ResultadoDel = False;
try {
  $ResultadoDel = mysqli_query($Conexion, $ConsultaDel);
        }
 catch (Exception $e)
     { $Mensaje = "No se pudo eliminar el estudiante con codigo: " .$Codigo_Estudiante;
        // $error = $e -> getMessage();
        //print $e -> getMessage();
        //print $Resultado;
     }
 if($ResultadoDel == False) { $Mensaje = "No se pudo consultar el estudiante";
                 //die($mysqli_error($Conexion));
             }
 else { $Mensaje = "se elimino el estudiante con codigo: ".$Codigo_Estudiante;}
 echo $Mensaje;
            }
?>
