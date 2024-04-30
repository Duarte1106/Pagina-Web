<?php
if (!empty($_POST["Codigo_Estudiante"]) && !empty($_POST["Primer_Nombre"])  && !empty($_POST["Primer_Apellido"])  && !empty($_POST["Curso"])  && !empty($_POST["Codigo_Especialidad"])  && !empty($_POST["Codigo_Proyecto"])) {
    $Codigo_Estudiante = $_POST["Codigo_Estudiante"];
    $Primer_Nombre = $_POST["Primer_Nombre"];
    $Segundo_Nombre = $_POST["Segundo_Nombre"];
    $Primer_Apellido = $_POST["Primer_Apellido"];
    $Segundo_Apellido = $_POST["Segundo_Apellido"];
    $Curso = $_POST["Curso"];
    $Codigo_Especialidad = $_POST["Codigo_Especialidad"];
    $Codigo_Proyecto = $_POST["Codigo_Proyecto"];
    $Fecha_Nacimiento = $_POST["Fecha_Nacimiento"];

    include("bd.php");
    $Consulta = "INSERT INTO estudiantes (Codigo_Estudiante, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Curso, Codigo_Especialidad, Codigo_Proyecto, Fecha_Nacimiento) VALUES ('".$Codigo_Estudiante."', '".$Primer_Nombre."', '".$Segundo_Nombre."', '".$Primer_Apellido."', '".$Segundo_Apellido."', '".$Curso."', '".$Codigo_Especialidad."', '".$Codigo_Proyecto."', '".$Fecha_Nacimiento."')";
    
    //echo $Consulta;
    
    $Resultado = False;
   try {
     $Resultado = mysqli_query($Conexion, $Consulta);
    }
    catch (Exception $e)
        { $Mensaje = "<h3>No se pudo registrar el estudiante por error de datos</h3>";
            //$error = $e -> getMessage();
           //print $e -> getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "<h3>No se pudo registrar el estudiante (codigo invalido)</h3>";
                    //die($mysqli_error($Conexion));
                }
    else { $Mensaje = "<h3>el estudiante se registro correctamente</h3>";}
    
} // fin del if 
else {
    $Mensaje = "<h3>El codigo estudiante, primer nombre, primer apellido, curso,  especialidad y proyecto son obligatorios</h3>";
}     
echo $Mensaje;

?>