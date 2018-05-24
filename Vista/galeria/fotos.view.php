<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>EVENTOS | CONCUROS | CONFERENCIAS</title>
	<link rel="stylesheet" href="../../assets/css/superslides.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:400,300">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Michroma|Monda|Orbitron" rel="stylesheet">
</head>

<body>
     <nav class="navegacion" id="navegacion">
         <ul class="menu-main">
             <li><a class="menu" href="../../index.php">Inicio</a></li>
             <li><a class="menu" href="#">Galeria &darr;</a>
             <ul class="submenu">
                <li><a class="sub" href="fotos.php">Fotos</a></li>
                <li><a class="sub" href="#">Videos</a></li>
              </ul>
            </li>
             <li><a class="menu" href="../eventos/eventos.php">Eventos</a></li>
             <li><a class="menu" href="../conferencias/conferencia.php">Conferencias</a></li>
             <li><a class="menu" href="../concursos/concursos.php">Concursos</a></li>
         </ul>
     </nav>
    <br>
    <br>
    <div class="post-menu">
    <center>
    <h1 class="titulo-principal">Nuestra galeria de eventos</h1>
    <?php

/*    if (isset($_SESSION['usuario'])) 
    {
        if($_SESSION['tipo_usuario'] == 'administrador')
        {
            echo '<p class="usuario-dentro"><b>Nombre de administrador: </b>'.$_SESSION['usuario'].'</p><a href="vista/admin/index.php">Panel de control</a><a href="vista/admin/cerrar_sesion.php">Cerrar sesion</a>';
        }
        else if($_SESSION['tipo_usuario'] == 'estudiante')
        {
            echo '<p class="usuario-dentro"><b>Matricula de estudiante: </b>'.$_SESSION['usuario'].'</p><a href="#">Mis eventos</a><a href="vista/login-estudiantes/cerrar_sesion.php">Cerrar sesion</a>';
        }
    }*/
    ?>
    </center>
    </div>
    <br>
    <br>
    <hr class="linea-borde">
    <?php
    require_once("../../Controlador/galeria-controlador/galeria_controlador.php");
    ?>
    <div class="contenedor-galeria">
    <center>
    <?php
        $registro = new galeria_controlador();
        $registro->getGaleria();
    ?>
    </center>
    </div>
    <footer class="footer-post">
    <span><b>Copyright&copy; 2018 - COMUNICAUTE</b></span>
    </footer>
</body>
</html>