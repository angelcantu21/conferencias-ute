<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:400,300">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="../../assets/css/style-admin.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title>Crea una cuenta</title>
</head>
<body>
	<h1 class="titulo">Panel de Administrador</h1>
	<center><img src="../../assets/imagenes/logo/conferencista.png" style="width: 200px; height: 205px; margin-top: -30px;"></center>
	<div class="contenedor">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
        
<!--        	<div class="from-group">
				<center>
				    <select name="tipo_de_usuario">
                        <option value="administrador">Administrador</option>
                        <option value="estudiante">Estudiante</option>
                    </select>
				</center>
			</div>-->
			<div class="from-group">
				<center>
				<input type="text" name="usuario" class="usuario" placeholder="Usuario">
				</center>
			</div>
			<div class="from-group">
				<center>
				<input type="password" name="password" class="password" placeholder="Contraseña">
				</center>
				<br>
				<br>
				<!-- <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> -->
				<center><input type="submit" value="Iniciar" style=" padding: 15px; width: 80%; background: #CACACA; border-color: black; font-family: 'Roboto'; font-weight: bold;"></center>
			</div>
		</form>

		<p class="texto-registrate"> SOLO PERSONAL AUTORIZADO<p>

	</div>
</body>
</html>