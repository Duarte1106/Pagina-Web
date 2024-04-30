<?php
if (!empty($_POST["Codigo"]) && !empty($_POST["NombreEspecialidad"])) {
    $CodigoEspecialidad = $_POST["Codigo"];
    $NombreEspecialidad = $_POST["NombreEspecialidad"];

    include("bd.php");
    $Consulta = "INSERT INTO especialidad (Codigo_Especialidad, Nombre_Especialidad) VALUES ('".$CodigoEspecialidad."' , '".$NombreEspecialidad."')";
    $Resultado = False;
   try {
     $Resultado = mysqli_query($Conexion, $Consulta);}
    catch (Exception $e)
        { $Mensaje = "<h3>No se pudo registrar la especialidad por error de datos</h3>";
           //$error = $e -> getMessage();
            //print $e -> getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "<h3>No se pudo registrar la especialidad (codigo invalido)</h3>";
                    //die($mysqli_error($Conexion));
                }
    else { $Mensaje = "<h3>La especialidad se registro correctamente</h3>";}
    
} // fin del if 
else {
    $Mensaje = "<h3>El codigo y el nombre de la especialidad es obligatorio</h3>";
}     
echo $Mensaje;
?>