<?php session_start();

if (isset($_SESSION['usuario_admin']) || isset($_SESSION['usuario_alumno'])) {
        require 'Vista/index.view.php';
    //echo '<h1>'.date("G:i:s").'</h1>';
}else{
	header('location: Vista/login-estudiantes/login.php');
}
?>