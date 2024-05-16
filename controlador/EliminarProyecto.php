<?php 
if(!empty($_GET["Codigo_Proyecto"])){
include ("bd.php");
$Codigo_Proyecto = $_GET["Codigo_Proyecto"];
$ConsultaPr = "DELETE FROM proyectos WHERE proyectos.Codigo_Proyecto ="  .$Codigo_Proyecto;

//echo $ConsultaPr;

$ResultadoPr = False;
try {
  $ResultadoPr = mysqli_query($Conexion, $ConsultaPr);
        }
 catch (Exception $e)
     { $Mensaje = "No se pudo eliminar el proyecto con codigo: " .$Codigo_Proyecto;
        // $error = $e -> getMessage();
        //print $e -> getMessage();
        //print $Resultado;
     }
 if($ResultadoPr == False) { $Mensaje = "No se pudo consultar el proyecto";
                 //die($mysqli_error($Conexion));
             }
 else { $Mensaje = "se elimino el Poryecto con codigo: ".$Codigo_Proyecto;}
 echo $Mensaje;
            }
?>