<!DOCTYPE html>
<html lang="en">
<head>
	<title>Panel de Control</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:400,300">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<link rel="stylesheet" href="../../assets/css/style-panel.css">
</head>
<body>   
  <header>
   <div class="titulo">
       <img src="../../assets/imagenes/logo/Logo-png.png"><a class="enlace-titulo" href="index.php"><p class="panel-texto">Panel de Administrador</p></a>
    </div>
    </header>
          <nav class="menu">
        <ul class="menu-main">
            <li><a href="evento-updel.php">Panel de Control</a></li>
            <li><a href="slider-updel.php">Panel de Slider</a></li>
            <li><a href="galeria-updel.php">Panel de Galeria</a></li>
            <li><a href="postulacion-updel.php">Postulaciones</a></li>
            <li><a href="cerrar_sesion.php" style="color: red;">Cerrar Sesion</a></li>
        </ul>
    </nav>
    <p style="text-align: center; font-size: 15px;">Nombre de usuario: <?php  echo '<b>  '.$_SESSION['usuario_admin'].'  </b>'?><a href="../../index.php">Volver al sitio</a></p>
    <hr class="border">
    <table class="table table-bordered">
        <thead class="bg-primary cabecera">
            <tr>
                <td align="center" class="titulo-col">ID</td>
                <td align="center" class="titulo-col">Nombre</td>
                <td align="center" class="titulo-col">Tema</td>
                <td align="center" class="titulo-col">Descripcion</td>
                <td align="center" class="titulo-col">E-Mail</td>
                <td align="center" class="titulo-col">Telefono</td>
                <td align="center" colspan="1" class="titulo-col">Configuraciones</td>
            </tr>
        </thead>
        <tbody>
        <?php

            require_once("../../Controlador/postulacion-controlador/postulacion_controlador.php");
        
        ?>
        <?php
        $fila = new controlador_postulacion();
        $fila->get_postulaciones();
        ?>
        </tbody>
    </table>
</body>
</html>