<?php

class alumno_modelo
{
	private $db;
	private $alumnos;

	public function __construct($ruta)
	{
		require_once ($ruta);
        
		$this->db=conexion::conectar();

		$this->alumnos=array();
	}
    
    public function get_alumnos($nombre)
	{
		$consulta=$this->db->query("SELECT * FROM alumnos WHERE usuario_alumno='".$nombre."'");

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->alumnos[]=$filas;
		}

		return $this->alumnos;
	}

	public function get_alumnos_info($id)
	{
		$consulta=$this->db->query("SELECT * FROM alumnos WHERE Matricula=".$id);

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->alumnos[]=$filas;
		}

		return $this->alumnos;
	}

	public function login_alumnos($user, $pass)
	{
		$consulta=$this->db->query("SELECT * FROM alumnos WHERE usuario_alumno = '".$user."' AND password_alumno = '".$pass."'");
		$resultado = $consulta->fetch();

		if ($resultado != false) {//SI RESULTADO ES DIFERENTE DE FALSO, OSEA VERDADERO
	      	$_SESSION['usuario_alumno'] = $user;//SE GUARDA NUESTRA SESION EN NUESTRA VARIABLE
	      	header('Location: ../../index.php');//SE MANDA HACIA NUESTRO INDEX
   		}
	}
}

?>