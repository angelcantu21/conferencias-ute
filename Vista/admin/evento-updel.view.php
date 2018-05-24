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
 <div class="capa-negra"></div>
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
                <th colspan="1" align="center" class="agregar-elemento" style="cursor: pointer;"><center><u>Nuevo</u></center></th>
                <th colspan="8"><center>Lista de eventos</center></th>
            </tr>
        </thead>
        <tbody class="bg-primary cabecera">
               <tr>
                <td align="center" class="titulo-col">Tipo</td>
                <td align="center" class="titulo-col">Tema</td>
                <td align="center" class="titulo-col">Descripcion</td>
                <td align="center" class="titulo-col">Edificio</td>
                <td align="center" class="titulo-col">Fecha</td>
                <td align="center" class="titulo-col">Inicio</td>
                <td align="center" class="titulo-col">Fin</td>
            <td align="center" colspan="2" class="titulo-col">Configuraciones</td></tr>
        <?php

            require_once("../../Controlador/evento-controlador/evento_controlador.php");
        
        ?>
        <?php
        $fila = new evento_controlador();
        $fila->getEventosTabla();
        ?>
        </tbody>
    </table>
    <div class="contenedor-subir">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    <label for="Categorias">Tipo de evento</label>
    <select name="Categorias">
        <option value="conferencia">Conferencia</option>
        <option value="evento">Evento</option>
        <option value="concurso">Concurso</option>	
    </select>
    <label for="titulos">Nombre del evento:</label>
    <input type="text" REQUIRED placeholder="Nombre del evento" name="titulo" id="titulo-input">
    <label for="titulos">Descripcion del evento:</label>
    <textarea REQUIRED placeholder="Descripcion del evento (200 caracteres)" name="descripcion"></textarea>
    <label for="titulos">Edificio:</label>
    <input type="text" REQUIRED placeholder="Ejemplo: D-1" name="edificio">
    <label for="titulos">Fecha de emision:</label>
    <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>">
    <label for="titulos">Inicio:</label>
    <input type="time" name="hora_inicio" value="<?php echo date("G:i");?>">
    <label for="titulos">Final:</label>
    <input type="time" name="hora_final" value="<?php echo date("G:i");?>"><br>     
    <label for="titulos" style="display: block;">Subir imagen:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Agregar evento">
    </form>
    </div>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/modal-subir.js"></script>
</body>
</html>