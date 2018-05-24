<?php session_start();

if (isset($_SESSION['usuario_admin'])) {
        //Si es de tipo aministrador se le redirige al index del panel
        require 'index.view.php';
}else if(isset($_SESSION['usuario_alumno'])){
    //Si el usuario no es de tipo administrador se redirige al index principal
        header('Location: ../../index.php');
}else{
    //Si no hay usuario entonces se le manda al login
	header('location: login.php');
}
?>