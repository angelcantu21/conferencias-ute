<?php

class evento_modelo
{
	//Se crean 2 atributos
	private $db;
	private $evento;

	//Constructor de nuestra clase
	public function __construct()
	{
		//Se requiere la conexion a mi db
		require_once ("../../config/conexion.php");

		//Al atributo db le pasamos nuestra funcion de conectar de nuestra clase conexion
		$this->db=conexion::conectar();

		//Evento lo declaramos como arreglo
		$this->evento=array();
	}

	//Funcion de obtener eventos solo de un tipo en especifico
	public function get_eventos_ev($tipo)
	{
		$consulta=$this->db->query("SELECT * FROM eventos WHERE tipo_evento='".$tipo."'");

		//Mientras tenga filas por recorrer
		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->evento[]=$filas;//Se guarda en nuestro arreglo
		}

		return $this->evento;//Se regresan nuestras filas traidas de mi db
	}

	//En esta funcion muestro todos los registros que hay en la tabla eventos
	public function get_eventos_tabla()
	{
		$consulta=$this->db->query("SELECT * FROM eventos");

		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->evento[]=$filas;
		}

		return $this->evento;
	}

	//En esta funcion solo muestro aquellos eventos que sean eligidas por el usuario en la pagina que se llama eventos
	public function get_eventos_detalles($dato)
	{
		$consulta=$this->db->query("SELECT * FROM eventos WHERE idevento=".$dato);
		
		while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$this->evento[]=$filas;
		}

		return $this->evento;
	}

	//Eliminar eventos
	public function del_evento($dato)
    {
        $consulta=$this->db->query("DELETE FROM eventos WHERE idevento=".$dato);
    }

    //Insertar eventos
    public function insert_evento($tipo, $nombre, $descripcion, $edificio, $fecha, $horaIn, $horaFin, $imagen)
	{
		$consulta=$this->db->query("INSERT INTO eventos VALUES (null,'".$tipo."','".$nombre."','".$descripcion."','".$edificio."','".$fecha."','".$horaIn."','".$horaFin."', '".$imagen."')");
	
	}

	public function update_evento($tipo, $nombre, $descripcion, $edificio, $fecha, $horaIn, $horaFin, $dato)
	{
		$consulta=$this->db->query("UPDATE eventos SET tipo_evento='".$tipo."', nombre_evento='".$nombre."', descripcion_evento='".$descripcion."', edificio_evento='".$edificio."', fecha_evento='".$fecha."', hora_inicio='".$horaIn."', hora_final='".$horaFin."' WHERE idevento=".$dato);
	}
}

?>