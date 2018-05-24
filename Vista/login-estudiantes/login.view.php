<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/imagenes/icon/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:400,300">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../../assets/css/style-estudiante.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>COMUNICAUTE</title>
</head>

<body>
   <div class="capa-negra"></div>
    <h1 class="titulo">Bienvenido a COMUNICAUTE</h1>
    <hr class="border">
    <div class="lado-izquierdo">
        <video autoplay controls muted>
            <source src="../../assets/imagenes/videos/video-conferencia.mp4" type="video/mp4">
        </video>
    </div>
    <div class="contenedor">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
            <p style="margin-bottom: 40px; margin-top: 40px; text-align: center;">Solo miembros de la UTE pueden ingresar al sistema.</p>
            <div class="from-group">
                <center>
                    <input type="text" name="usuario" class="usuario" placeholder="Matricula">
                </center>
            </div>
            <div class="from-group">
                <center>
                    <input type="password" name="password" class="password" placeholder="Contraseña">
                </center>
                <?php if(!empty($errores)):?>
                <div class="error">
                    <ul>
                        <?php echo $errores;?>
                    </ul>
                </div>
                <?php endif ?>
                <br>
                <br>
                <!-- <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> -->
                <center><input type="submit" value="Ingresar" style=" padding: 15px; width: 80%; background: #CACACA; border-color: black; font-family: 'Roboto'; font-weight: bold;"></center>
            </div>
        </form>

        <p class="texto-registrate agregar-elemento" style="cursor: pointer;">POSTULARME PARA EVENTO<p><br>
    </div>
    <div class="contenedor-subir">
            <form action="postulacion.php" method="POST">
            <label for="nombre">Nombres:</label>
            <input type="text" name="nombre" placeholder="Escribe tu nombre" REQUIRED>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" placeholder="Escribe tu apellidos" REQUIRED>
            <label for="correo">E-mail:</label>
            <input type="email" name="correo" placeholder="ejemplo@example.com" REQUIRED>
            <label for="telefono">Telefono/Celular:</label>
            <input type="text" name="telefono" placeholder="+528118439434" REQUIRED>
            <label for="tipo">Tema de conferencia:</label>
            <input type="text" name="tema" placeholder="Tema de conferencia" REQUIRED>
            <label for="descripcion">Descripcion:</label>
            <textarea name="mensaje" id="mensaje" placeholder="Escribe tu mensaje (100 caracteres)"></textarea>
            <center><input type="submit" name="boton" value="Enviar Datos"></center>
        </form>
    </div>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/modal-postulacion.js"></script>
</body>

</html>
