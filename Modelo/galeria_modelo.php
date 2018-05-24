<?php

class galeria_modelo
{

	private $db;
	private $galeria;

	public function __construct()
	{
		require_once ("../../config/conexion.php");

		$this->db=conexion::conectar();

		$this->galeria=array();
	}

	public function get_galeria()
	{
		$consulta=$this->db->query("SELECT * FROM galeria");

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->galeria[]=$filas;
		}

		return $this->galeria;
	}

	public function get_galeria_tabla()
	{
		$consulta=$this->db->query("SELECT * FROM galeria");

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->galeria[]=$filas;
		}

		return $this->galeria;
	}

		public function get_galeria_detalles($dato)
	{
		$consulta=$this->db->query("SELECT * FROM galeria WHERE idgaleria=".$dato);

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->sliders[]=$filas;
		}

		return $this->sliders;
	}

	public function del_galeria($dato)
    {
        $consulta=$this->db->query("DELETE FROM galeria WHERE idgaleria=".$dato);
    }

    public function insert_galeria($nombre, $descripcion, $imagen)
	{
		$consulta=$this->db->query("INSERT INTO galeria VALUES (null,'".$nombre."','".$descripcion."','".$imagen."')");
	}

	public function update_galeria($nombre, $descripcion, $dato)
	{
        try{
		$consulta=$this->db->query("UPDATE galeria SET nombre_galeria='".$nombre."', descripcion_galeria='".$descripcion."' WHERE idgaleria=".$dato);
        }catch(Exception $ex){
            
        }
	}
}

?>