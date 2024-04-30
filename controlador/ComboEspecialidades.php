<?php 
include("bd.php");

$ConsultaEsp = "SELECT * FROM especialidad";

$ResultadoEsp = False;
try {
  $ResultadoEsp = mysqli_query($Conexion, $ConsultaEsp);
        }
 catch (Exception $e)
     { $Mensaje = "No se pudo consultar la especialidad";
        // $error = $e -> getMessage();
        print $e -> getMessage();
        //print $Resultado;
     }
 if($ResultadoEsp == False) { $Mensaje = "No se pudo consultar la especialidad";
                 //die($mysqli_error($Conexion));
             }
 else { 
    echo '<select name="Codigo_Especialidad" id="Codigo_Especialidad">';
    while($RegistroEsp=$ResultadoEsp->fetch_assoc()){
        if($Registro["Codigo_Especialidad"] == $RegistroEsp["Codigo_Especialidad"]) {
            echo '<option value="'.$RegistroEsp["Codigo_Especialidad"].'" selected>'.$RegistroEsp["Nombre_Especialidad"].'</option>';
        }
        else {echo '<option value="'.$RegistroEsp["Codigo_Especialidad"].'">'.$RegistroEsp["Nombre_Especialidad"].'</option>';}
    }//fin del ciclo de listado de especialidades
    echo '</select>';
 }
?>