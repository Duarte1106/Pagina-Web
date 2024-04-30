<?php
if (!empty($_POST["Codigo_Proyecto"]) && !empty($_POST["Nombre_Proyecto"])) {
    $CodigoProyecto = $_POST["Codigo_Proyecto"];
    $NombreProyecto = $_POST["Nombre_Proyecto"];
    $Resumen = $_POST["Resumen"];
    $Fecha_Registro = $_POST["Fecha_Registro"];

    include("bd.php");
    $Consulta = "INSERT INTO proyectos(Codigo_Proyecto, Nombre_Proyecto, Resumen, Fecha_Registro) VALUES ('".$CodigoProyecto."', '".$NombreProyecto."' , '".$Resumen."' , '".$Fecha_Registro."')";
    $Resultado = False;
   try {
     $Resultado = mysqli_query($Conexion, $Consulta);}
    catch (Exception $e)
        { $Mensaje = "<h3>No se pudo registrar el proyecto por error de datos</h3>";
            //$error = $e -> getMessage();
            print $e -> getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "<h3>No se pudo registrar el proyecto (codigo invalido)</h3>";
                    //die($mysqli_error($Conexion));
                }
    else { $Mensaje = "<h3>el proyecto se registro correctamente</h3>";}
    
} // fin del if 
else {
    $Mensaje = "<h3>El codigo y el nombre del proyecto es obligatorio</h3>";
}     
echo $Mensaje;

?>