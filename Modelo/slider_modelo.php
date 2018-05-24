<?php

class slider_modelo
{
	private $db;
	private $sliders;

	public function __construct($ruta)
	{
		require_once ($ruta);
        
		$this->db=conexion::conectar();

		$this->sliders=array();
	}

	public function get_sliders()
	{
		$consulta=$this->db->query("SELECT * FROM Slider");

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->sliders[]=$filas;
		}

		return $this->sliders;
	}

		public function get_sliders_principal()
	{
            
		$consulta=$this->db->query("SELECT * FROM Slider LIMIT 5");

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->sliders[]=$filas;
	}

		return $this->sliders;
	}

	public function get_sliders_detalles($dato)
	{
		$consulta=$this->db->query("SELECT * FROM Slider WHERE idslider=".$dato);

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->sliders[]=$filas;
		}

		return $this->sliders;
	}

	public function del_sliders($dato)
	{
		$consulta=$this->db->query("DELETE FROM Slider WHERE idSlider=".$dato);
	}

	public function insert_sliders($nombre, $descripcion, $imagen)
	{
		$consulta=$this->db->query("INSERT INTO slider VALUES (null,'".$nombre."','".$descripcion."','".$imagen."')");
	}

	public function update_slider($titulo, $descripcion, $dato)
	{
		$consulta = $this->db->query("UPDATE slider SET titulo_slider='".$titulo."', descripcion_slider='".$descripcion."' WHERE idslider=".$dato);
	}
}

?>