<?php 
include("bd.php");

$ConsultaPr = "SELECT * FROM Proyectos";

$ResultadoPr = False;
try {
  $ResultadoPr = mysqli_query($Conexion, $ConsultaPr);
        }
 catch (Exception $e)
     { $Mensaje = "No se pudo consultar el proyecto";
        // $error = $e -> getMessage();
        print $e -> getMessage();
        //print $Resultado;
     }
 if($ResultadoPr == False) { $Mensaje = "No se pudo consultar el proyecto";
                 //die($mysqli_error($Conexion));
             }
 else { 
    echo '<select name="Codigo_Proyecto" id="Codigo_Proyecto">';
    while($RegistroPr=$ResultadoPr->fetch_assoc()){
        if($Registro["Codigo_Proyecto"] == $RegistroPr["Codigo_Proyecto"]) {
            echo '<option value="'.$RegistroPr["Codigo_Proyecto"].'" selected>'.$RegistroPr["Nombre_Proyecto"].'</option>';
        }
        else {echo '<option value="'.$RegistroPr["Codigo_Proyecto"].'">'.$RegistroPr["Nombre_Proyecto"].'</option>';}
    }//fin del ciclo de listado de especialidades
    echo '</select>';
 }
?>