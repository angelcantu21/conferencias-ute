<?php
    //session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>EVENTOS | CONCUROS | CONFERENCIAS</title>
        <link rel="stylesheet" href="./assets/css/superslides.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:400,300">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
    </head>

    <body>
        <div id="slides">
            <ul class="slides-container">
                <?php

            require_once("./Controlador/slider-controlador/slider_controlador.php");
        
        ?>
                    <?php
        $registro = new controlador_slider();
        $registro->get_slider_principal_control();
        ?>
            </ul>
            <nav class="slides-navigation">
                <a href="#" class="next">&#62;</a>
                <a href="#" class="prev">&#60;</a>
            </nav>
        </div>
        <nav class="navegacion" id="navegacion">
            <ul class="menu-main">
                <li><a class="menu" href="index.php">Inicio</a></li>
                <li><a class="menu">Galeria &darr;</a>
                    <ul class="submenu">
                        <li><a class="sub" href="vista/galeria/fotos.php">Fotos</a></li>
                        <li><a class="sub" href="#">Videos</a></li>
                    </ul>
                </li>
                <li><a class="menu" href="vista/eventos/eventos.php">Eventos</a></li>
                <li><a class="menu" href="vista/conferencias/conferencia.php">Conferencias</a></li>
                <li><a class="menu" href="vista/concursos/concursos.php">Concursos</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <div class="post-menu">
            <center>
                <?php

    if (isset($_SESSION['usuario_admin'])) 
    {
            echo '<p class="usuario-dentro"><b>Nombre de administrador: </b>'.$_SESSION['usuario_admin'].'</p><a href="vista/admin/index.php">Panel de control</a><a href="vista/admin/cerrar_sesion.php">Cerrar sesion</a>';
    }else if(isset($_SESSION['usuario_alumno']))
        {
        require_once("./Controlador/alumno-controlador/alumno_controlador.php");
            echo '<p class="usuario-dentro"><b>Matricula de estudiante: </b>'.$_SESSION["usuario_alumno"];
            $alumnos = new alumno_controlador();
            $alumnos->getAlumnos();
            echo '<a href="vista/login-estudiantes/cerrar_sesion.php">Cerrar sesion</a>';
        }
    ?>
            </center>
        </div>
        <br>
        <br>
        <div class="contenedor-inicio">
            <hr class="linea-borde">
            <!-- <h1 class="titulo-principal">Pagina de inicio</h1><br> -->
            <center><img src="./assets/imagenes/logo/LOGO-PAGINA-VERDE.png" style="cursor: pointer; padding-top: 10px;" title="Somos COMUNICAUTE"></center>

            <p class="parrafos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et odio sit amet neque cursus efficitur aliquet sit amet massa. Donec eget facilisis ante. Fusce ullamcorper, risus in placerat varius, purus metus cursus arcu, ac varius augue purus vel enim. In eleifend accumsan sapien, at elementum leo aliquam posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et odio sit amet neque cursus efficitur aliquet sit amet massa. Donec eget facilisis ante. Fusce ullamcorper, risus in placerat varius, purus metus cursus arcu, ac varius augue purus vel enim. In eleifend accumsan sapien, at elementum leo aliquam posuere.</p>
            <center>
                <a href="https://www.facebook.com/" target="_blank"><img alt="siguenos en facebook" height="32" src="http://2.bp.blogspot.com/-q_Tm1PpPfHo/UiXnJo5l-VI/AAAAAAAABzU/MKdrVYZjF0c/s1600/face.png" title="Siguenos en facebook" width="32" /></a>
                <a href="https://www.instagram.com/" target="_blank"><img alt="si­gueme en Instagram" height="32" src="http://2.bp.blogspot.com/-kQop92g4NsM/UidPJ06ER1I/AAAAAAAACAA/0mj0jK5hhXM/s1600/instagram2.png" title="Siguenos en Instagram" width="32" /></a>
                <a href="https://www.youtube.com/" target="_blank"><img alt="Canal de youtube" height="32" src="http://4.bp.blogspot.com/-WvN3y-sXv_Y/UiXnJDRAAhI/AAAAAAAABzA/uM7s7A_Y5qc/s1600/Youtube+alt+2.png" title="Canal de youtube" width="32" /></a>
            </center>
            <hr>
        </div>
        <!--Separacion del contenedor-->

        <div class="contenedor-acerca">
            <hr>
            <h1 class="titulo-principal">Acerca de</h1>
            <p class="parrafos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et odio sit amet neque cursus efficitur aliquet sit amet massa. Donec eget facilisis ante. Fusce ullamcorper, risus in placerat varius, purus metus cursus arcu, ac varius augue purus vel enim. In eleifend accumsan sapien, at elementum leo aliquam posuere.</p>
            <center><button><a href="vista/galeria/fotos.php">Ver nuestra galeria...</a></button></center><br>
            <hr>
        </div>

        <!--Separacion del contenedor-->

        <div class="contenedor-contacto">
            <hr>
            <h1 class="titulo-principal">Contacto</h1>
            <center>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <!-- <label for="nombre">Nombre:</label> -->
                    <input type="text" REQUIRED placeholder="Tu nombre" name="nombre">
                    <!-- <label for="correo">Correo:</label> -->
                    <input type="email" REQUIRED placeholder="correo@example.com" name="correo">
                    <!-- <label for="mensaje">Mensaje:</label> -->
                    <textarea name="mensaje" id="mensaje" placeholder="Mensaje aqui"></textarea>
                    <button onclick="contacto.submit()">Enviar mensaje</button><br>
                </form>
            </center>
            <hr>
        </div>
        <footer>
            <span><b>Copyright&copy; 2018 - COMUNICAUTE</b></span>
        </footer>
        <script src="./assets/js/jquery.js"></script>
        <script src="./assets/js/jquery.superslides.js"></script>
        <script src="./assets/js/menu.js"></script>
    </body>

    </html>
