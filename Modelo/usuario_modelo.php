<?php

class usuario_modelo
{
	private $db;
	private $usuarios;

	public function __construct()
	{
		require_once ("../../config/conexion.php");
        
		$this->db=conexion::conectar();

		$this->usuarios=array();
	}

	public function get_usuarios()
	{
		$consulta=$this->db->query("SELECT * FROM usuarios");

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->usuarios[]=$filas;
		}

		return $this->usuarios;
	}

	public function login_usuario($user, $pass)
	{
		$consulta=$this->db->query("SELECT * FROM administradores WHERE usuario_admin = '".$user."' AND password_admin = '".$pass."'");
		$resultado = $consulta->fetch();

		if ($resultado != false) {//SI RESULTADO ES DIFERENTE DE FALSO, OSEA VERDADERO
	      	$_SESSION['usuario_admin'] = $user;//SE GUARDA NUESTRA SESION EN NUESTRA VARIABLE
	      	header('Location: index.php');//SE MANDA HACIA NUESTRO INDEX
	   
   		}
	}
}

?>