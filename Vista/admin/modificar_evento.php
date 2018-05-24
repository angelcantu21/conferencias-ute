<?php

session_start();

if (isset($_SESSION['usuario_admin'])) {
        //Si es de tipo aministrador se le redirige al index del panel
        require 'modificar_evento.view.php';
}else if(isset($_SESSION['usuario_alumno'])){
    //Si el usuario no es de tipo administrador se redirige al index principal
        header('Location: ../../index.php');
}else{
    //Si no hay usuario entonces se le manda al login
	header('location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

/*	$conexion= new PDO("mysql:host=localhost;dbname=ProyectoWeb","root","");
	$result=$conexion->prepare(
		"UPDATE eventos SET tipo_evento='".$_POST['Categorias']."', nombre_evento='".$_POST['titulo']."', descripcion_evento='".$_POST['descripcion']."', edificio_evento='".$_POST['edificio']."', fecha_evento='".$_POST['fecha']."', hora_inicio='".$_POST['hora_inicio']."', hora_final='".$_POST['hora_final']."' WHERE idevento=".$_GET['id']);
	$result->execute();*/

	require_once ("../../Controlador/evento-controlador/evento_controlador.php");
	$resultado= new evento_controlador();
	$resultado->updateEvento();
	header("Location: evento-updel.php");
}

?>