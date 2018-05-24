<?php session_start();

if (isset($_SESSION['usuario_alumno'])) {
        require 'mis-eventos.view.php';
}else{
	header('location: ../login-estudiantes/login.php');
}
?>