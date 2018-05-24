<?php 

	class conexion{
		public static function conectar(){
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=ProyectoWebPrueba','root','');//Conexion local
				$conexion->exec('SET CHARACTER SET utf8');//
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Excepciones

			} catch (Exception $e) {
				echo "ERROR DE CONEXION". $e->getMessage. $e->getLine;
			}
			return $conexion;//Retornamos nuestra conexion
		}

		
	}
?>