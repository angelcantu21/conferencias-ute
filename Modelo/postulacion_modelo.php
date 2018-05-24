<?php

class postulacion_modelo
{
	private $db;
	private $post;
	
	public function __construct()
	{
		require_once ("../../config/conexion.php");

		$this->db=conexion::conectar();

		$this->post=array();
	}

	public function get_postulantes()
	{
		$consulta=$this->db->query("SELECT * FROM postulaciones");

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->post[]=$filas;
		}

		return $this->post;
	}

	public function del_postulacion($dato)
	{
		$consulta=$this->db->query("DELETE FROM postulaciones WHERE idpostulacion=".$dato);
	}

	public function insert_postulacion($nombre, $apellido, $tema, $descripcion, $correo, $telefono)
	{
		try
		{
		$consulta=$this->db->query("INSERT INTO postulaciones VALUES (null,'".$nombre."','".$apellido."','".$tema."','".$descripcion."','".$correo."','".$telefono."')");
		}catch(Exception $ex)
		{
			echo '<script>alert("No se ha podido realizar el proceso"'.$ex->getMessage().');</script>';
		}
	}

}


?>