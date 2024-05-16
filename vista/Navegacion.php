<?php
echo '
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/DUARTE_PHP1/css/estilo.css">
</head>
<body>

<ul>
  <li><a href="/DUARTE_PHP1">Inicio</a></li>
  <li><a href="#news">News</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Estudiante</a>
    <div class="dropdown-content">
      <a href="/DUARTE_PHP1/vista/Estudiantes.php">Listado Estudiantes</a>
      <a href="/DUARTE_PHP1/vista/RegistroEstudiantes.php">Registrar Estudiante</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Especialidad</a>
    <div class="dropdown-content">
      <a href="/DUARTE_PHP1/vista/Especialidades.php">Listado Especialidades</a>
      <a href="/DUARTE_PHP1/vista/RegistroEspecialidades.php">Registrar Especialidad</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Proyecto</a>
    <div class="dropdown-content">
      <a href="/DUARTE_PHP1/vista/Proyectos.php">Listado Proyectos</a>
      <a href="/DUARTE_PHP1/vista/RegistroProyectos.php">Registrar Proyecto</a>
    </div>
  </li>
</ul>
</body>
</html>';

