<?php

include("bd.php");
if (!empty($_GET["Codigo_Estudiante"])){
    $Consulta = "select * from estudiantes where Codigo_Estudiante = ".$_GET["Codigo_Estudiante"];
    $Resultado = False;
   try {
     $Resultado = mysqli_query($Conexion, $Consulta);
    }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar el estudiante con codigo".$_GET["Codigo_Estudiante"];
            //$error = $e -> getMessage();
           //print $e -> getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar el estudiante con codigo".$_GET["Codigo_Estudiante"];
                    //die($mysqli_error($Conexion));
                } 
    else { $Mensaje = "Se pudo consultar el estudiante con codigo".$_GET["Codigo_Estudiante"];}
 $Registro = $Resultado -> fetch_assoc();   
} //


else if (!empty($_POST["Codigo_Estudiante"]) && !empty($_POST["Primer_Nombre"])  && !empty($_POST["Primer_Apellido"])  && !empty($_POST["Curso"])  && !empty($_POST["Codigo_Especialidad"])  && !empty($_POST["Codigo_Proyecto"])) {
    $Codigo_Estudiante = $_POST["Codigo_Estudiante"];
    $Primer_Nombre = $_POST["Primer_Nombre"];
    $Segundo_Nombre = $_POST["Segundo_Nombre"];
    $Primer_Apellido = $_POST["Primer_Apellido"];
    $Segundo_Apellido = $_POST["Segundo_Apellido"];
    $Curso = $_POST["Curso"];
    $Codigo_Especialidad = $_POST["Codigo_Especialidad"];
    $Codigo_Proyecto = $_POST["Codigo_Proyecto"];
    $Fecha_Nacimiento = $_POST["Fecha_Nacimiento"];

    $Consulta = "UPDATE estudiantes SET Codigo_Estudiante = '".$Codigo_Estudiante."', Primer_Nombre = '".$Primer_Nombre."', Segundo_Nombre = '".$Segundo_Nombre."', Primer_Apellido = '".$Primer_Apellido."', Segundo_Apellido = '".$Segundo_Apellido."', Curso = '".$Curso."', Codigo_Especialidad = '".$Codigo_Especialidad."', Codigo_Proyecto = '".$Codigo_Proyecto."', Fecha_Nacimiento = '".$Fecha_Nacimiento."' WHERE estudiantes.Codigo_Estudiante = " .$_POST["CodigoActual"];
    
    //echo $Consulta;
    
    $Resultado = False;
   try {
     $Resultado = mysqli_query($Conexion, $Consulta);
    }
    catch (Exception $e)
        { $Mensaje = "No se pudo actualizar el estudiante por error en los datos";
            //$error = $e -> getMessage();
           //print $e -> getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo actualizar el estudiante";
                    //die($mysqli_error($Conexion));
                }
    else { $Mensaje = "El estudiante se actualizo correctamente";
    //header('Location: estudiantes.php');
    }
    
} // fin del if 
else {
    $Mensaje = "<h3>El codigo estudiante, primer nombre, primer apellido, curso,  especialidad y proyecto son obligatorios</h3>";
}     
echo "<h3>".$Mensaje. "<h3/>" ;

//$EtudianteActualizacion = $Resultado -> fetch_assoc();
//echo $EstudianteActualizando["NombreEspecialidad"]

?>