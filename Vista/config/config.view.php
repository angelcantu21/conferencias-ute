<!DOCTYPE html>
<html lang="en">
<head>
	<title>Configurar base de datos</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
   <label for="servidor">Nombre del servidor</label>
   <input type="text" placeholder="Nombre del servidor" name="servidor">
   <label for="servidor">Nombre de la base de datos</label>
   <input type="text" placeholder="Nombre de la db" name="data-base">
   <label for="servidor">Nombre del usuario</label>
   <input type="text" placeholder="usuario" name="usuario">
   <label for="servidor">Nombre de la contraseña</label>
   <input type="text" placeholder="contraseña" name="password">
</form>
</body>
</html>