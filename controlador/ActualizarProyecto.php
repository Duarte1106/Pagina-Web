<?php

include("bd.php");
if (!empty($_GET["Codigo_Proyecto"])){
    $Consulta = "select * from proyectos where Codigo_Proyecto = ".$_GET["Codigo_Proyecto"];
    $Resultado = False;
   try {
     $Resultado = mysqli_query($Conexion, $Consulta);
    }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar el proyecto con codigo".$_GET["Codigo_Proyecto"];
            //$error = $e -> getMessage();
           //print $e -> getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar el proyecto con codigo".$_GET["Codigo_Proyecto"];
                    //die($mysqli_error($Conexion));
                } 
    else { $Mensaje = "Se pudo consultar el proyecto con codigo".$_GET["Codigo_Proyecto"];}
 $Registro = $Resultado -> fetch_assoc();   
} //


else if (!empty($_POST["Codigo_Proyecto"]) && !empty($_POST["Nombre_Proyecto"])  && !empty($_POST["Resumen"])  && !empty($_POST["Fecha_Registro"])) {
    $Codigo_Proyecto = $_POST["Codigo_Proyecto"];
    $Nombre_Proyecto = $_POST["Nombre_Proyecto"];
    $Resumen = $_POST["Resumen"];
    $Fecha_Registro = $_POST["Fecha_Registro"];

    $Consulta = "UPDATE proyectos SET Codigo_Proyecto = '".$Codigo_Proyecto."', Nombre_Proyecto = '".$Nombre_Proyecto."', Resumen = '".$Resumen."', Fecha_Registro = '".$Fecha_Registro."' WHERE proyectos.Codigo_Proyecto = " .$_POST["CodigoActual"];
    
    //echo $Consulta;
    
    $Resultado = False;
   try {
     $Resultado = mysqli_query($Conexion, $Consulta);
    }
    catch (Exception $e)
        { $Mensaje = "No se pudo actualizar el proyecto por error en los datos";
            //$error = $e -> getMessage();
           print $e -> getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo actualizar el proyecto";
                    //die($mysqli_error($Conexion));
                }
    else { $Mensaje = "El proyecto se actualizo correctamente";
        //echo $Consulta;
        header('Location: Proyectos.php');
    }
    
} // fin del if 
else {
    $Mensaje = "<h3>El codigo y el nombre del proyecto es obligatorio</h3>";
}     
echo "<h3>".$Mensaje. "<h3/>" ;

//$EtudianteActualizacion = $Resultado -> fetch_assoc();
//echo $EstudianteActualizando["NombreEspecialidad"]

?>