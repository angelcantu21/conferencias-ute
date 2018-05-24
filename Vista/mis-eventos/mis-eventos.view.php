<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mis eventos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/superslides.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:400,300">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
</head>

<body>
    <nav class="navegacion" id="navegacion">
        <ul class="menu-main">
            <li><a class="menu" href="../../index.php">Inicio</a></li>
            <li><a class="menu" href="#">Galeria &darr;</a>
                <ul class="submenu">
                    <li><a class="sub" href="../galeria/fotos.php">Fotos</a></li>
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
    <center>
        <p class="titulo">Informacion de estudiante</p>
    </center>
    <hr class="linea-borde">
    <br>
    <br>
    <div class="post-menu">
        <?php
        
        require_once("../../Controlador/alumno-controlador/alumno_controlador.php");
        
        $info= new alumno_controlador();
        $info->getAlumnosInfo();
        
        ?>
        <br>
        <input type="file" style="font-family:'Raleway'; border-color: black; font-weight: bold; margin-left: 20px;" value="Cambiar foto" id="inputPhoto">
    </div>
    <br>
    <br>
    <hr class="linea-borde">
    <center><p class="titulo">Eventos asistidos</p></center>
    <table class="table table-bordered">
        <thead class="cabecera">
            <tr>
                <td align="center" class="titulo-col">Nombre de Evento</td>
                <td align="center" class="titulo-col">Fecha</td>
                <td align="center" class="titulo-col">Edificio</td>
                <td align="center" class="titulo-col">Estado</td>
                <td align="center" colspan="1" class="titulo-col">Configuraciones</td>
            </tr>
        </thead>
        <tbody>
            <tr>
		        <td align="center" class="columnas">Conferencia 1</td>
		        <td align="center" class="columnas">10-03-2018</td>
		        <td align="center" class="columnas">D-4</td>
		        <td align="center" class="columnas">Disponible</td>
		        <td align="center" class="acciones"><a href="#">Quitar</a></td>
		   </tr>
           <tr>
		        <td align="center" class="columnas">Conferencia 2</td>
		        <td align="center" class="columnas">13-04-2018</td>
		        <td align="center" class="columnas">D-1</td>
		        <td align="center" class="columnas">No disponible</td>
		        <td align="center" class="acciones"><a href="#">Quitar</a></td>
		   </tr>
        </tbody>
    </table>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/estudiantes.js"></script>
</body>
</html>
