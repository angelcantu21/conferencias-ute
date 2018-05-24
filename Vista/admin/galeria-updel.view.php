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
    <p style="text-align: center; font-size: 15px;">Nombre de usuario:
        <?php  echo '<b>  '.$_SESSION['usuario_admin'].'  </b>'?><a href="../../index.php">Volver al sitio</a></p>
    <hr class="border">
    <table class="table table-bordered">
        <thead class="bg-primary cabecera">
            <tr>
                <th colspan="1" align="center" class="agregar-elemento" style="cursor: pointer;">
                    <center><u>Nuevo</u></center>
                </th>
                <th colspan="5">
                    <center>Lista de galeria</center>
                </th>
            </tr>
        </thead>
        <tbody class="bg-primary cabecera">
            <tr>
                <td align="center" class="titulo-col">ID</td>
                <td align="center" class="titulo-col">Titulo</td>
                <td align="center" class="titulo-col">Descripcion</td>
                <td align="center" class="titulo-col">Foto</td>
                <td align="center" colspan="2" class="titulo-col">Configuraciones</td>
            </tr>
            <?php

            require_once("../../Controlador/galeria-controlador/galeria_controlador.php");
        
        ?>
                <?php
        $fila = new galeria_controlador();
        $fila->getGaleriaTabla();
        ?>
        </tbody>
    </table>
    <div class="contenedor-subir">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <label for="titulos">Titulo:</label>
            <input type="text" REQUIRED placeholder="Titulo para la foto" name="titulo">
            <label for="titulos">Descripcion:</label>
            <textarea REQUIRED placeholder="Descripcion de la foto" name="descripcion"></textarea>
            <label>Imagen:</label>
            <input type="file" REQUIRED name="image">
            <input type="submit" name="submit" value="Agregar elemento">
        </form>
    </div>
    <?php 
    require_once ('../../Controlador/galeria-controlador/galeria_controlador.php');
    ?>
    <div class="contenedor-modificar">
        <?php
        
        if(isset($_GET['id']))
        {
            $registro= new galeria_controlador();
            $registro->getGaleriaDetalles();
        }

    ?>
    </div>

    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/modal-subir.js"></script>

</body>

</html>
