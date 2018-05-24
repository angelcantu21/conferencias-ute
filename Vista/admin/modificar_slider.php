<?php

session_start();

if (isset($_SESSION['usuario_admin'])) {
        //Si es de tipo aministrador se le redirige al index del panel
        require 'modificar_slider.view.php';
}else if(isset($_SESSION['usuario_alumno'])){
    //Si el usuario no es de tipo administrador se redirige al index principal
        header('Location: ../../index.php');
}else{
    //Si no hay usuario entonces se le manda al login
	header('location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$conexion= new PDO("mysql:host=localhost;dbname=ProyectoWeb","root","");
/*	$result=$conexion->prepare(
		"UPDATE slider SET titulo_slider='".$_POST['titulo']."', descripcion_slider='".$_POST['descripcion']."' WHERE idslider=".$_GET['id']);
	$result->execute();
	header("Location: slider-updel.php");*/

	require_once ("../../Controlador/slider-controlador/slider_controlador.php");

	$resultado= new controlador_slider();
	$resultado->updateSliders();
	header("Location: slider-updel.php");
}

?>