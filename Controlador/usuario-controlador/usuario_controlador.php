<?php

class usuario_controlador
{

	public function getUsuarios(){

		//Se llama al modelo
		require_once("../../Modelo/usuario_modelo.php");

		$usuarios=new usuario_modelo();

		$array_usuarios=$usuarios->get_usuarios();

		foreach ($array_usuarios as $fila) 
		{
			
		}

	}

	public function loginUsuarios()
	{
		//Se llama al modelo
		require_once("../../Modelo/usuario_modelo.php");

		$usuarios=new usuario_modelo();

		$array_usuarios=$usuarios->login_usuario($_POST['usuario'], $_POST['password']);

		require_once("../../Vista/Admin/login.php");	
	}
	
}

?>