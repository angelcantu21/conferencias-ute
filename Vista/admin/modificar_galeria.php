<?php

session_start();

if (isset($_SESSION['usuario_admin'])) {
        //Si es de tipo aministrador se le redirige al index del panel
        require 'galeria-updel.view.php';
}else if(isset($_SESSION['usuario_alumno'])){
    //Si el usuario no es de tipo administrador se redirige al index principal
        header('Location: ../../index.php');
}else{
    //Si no hay usuario entonces se le manda al login
	header('location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require_once ("../../Controlador/galeria-controlador/galeria_controlador.php");
	$resultado= new galeria_controlador();
	$resultado->updateGaleria();
}

?>