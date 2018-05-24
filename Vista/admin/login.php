<?php session_start();

if (isset($_SESSION['usuario_admin'])) {//Si el usuario ya esta seteado entonces
	header('Location: index.php');//se manda a la pagina de index para que ya no ingrese sus datos
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //SI SE HACE CLIC EL BOTON DE SUBMIT

	require_once("../../Controlador/usuario-controlador/usuario_controlador.php");

	$login=new usuario_controlador();
	$login->loginUsuarios();
}

	require 'login.view.php';
 ?>