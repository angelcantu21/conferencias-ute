<?php

class alumno_controlador
{

    public function getAlumnos(){

		//Se llama al modelo
		require_once("./Modelo/alumno_modelo.php");

		$alumnos=new alumno_modelo("./config/conexion.php");

		$array_alumnos=$alumnos->get_alumnos($_SESSION['usuario_alumno']);
        
        foreach ($array_alumnos as $fila) 
        {
            echo '</p><a href="vista/mis-eventos/mis-eventos.php?id='.$fila["Matricula"].'">Mi cuenta</a>';	
        }
	}
    
	public function getAlumnosInfo(){

		//Se llama al modelo
		require_once("../../Modelo/alumno_modelo.php");

		$alumnos=new alumno_modelo("../../config/conexion.php");

		$array_alumnos=$alumnos->get_alumnos_info($_GET['id']);

		foreach ($array_alumnos as $fila) 
		{
			echo '<img src="../../assets/imagenes/usuarios/'.$fila["imagen_alumno"].'" alt="Imagen de usuario" width="15%" align="left" style="margin-bottom: 20px; margin-left: 20px; margin-right:10px;" class="imagen-alumno">
        <p>
            <b>Nombre de estudiante: </b>'.$fila["Nombre_alumno"]." ".$fila["Apellidos_alumno"].'
        </p>
        <p class="info-usuario">
            <b>Matricula:</b>'.$fila["Matricula"].'
        </p>
        <p class="info-usuario">
            <b>Carrera:</b>'.$fila["Carrera"].'
        </p>
        <p class="info-usuario">
            <b>Cuatrimestre:</b> '.$fila["Cuatrimestre"].'<sup>to</sup> Cuatrimestre
        </p>
        <p class="info-usuario">
            <b>Grupo:</b> '.$fila["Cuatrimestre"].'<sup>to</sup>'." ".$fila["Grupo"].'
        </p>';
		}
        //Se llama a la vista
		require_once("../../Vista/mis-eventos/mis-eventos.view.php");
	}

	public function loginAlumnos()
	{
		//Se llama al modelo
		require_once("../../Modelo/alumno_modelo.php");

		$alumnos=new alumno_modelo("../../config/conexion.php");

		$array_alumnos=$alumnos->login_alumnos($_POST['usuario'], $_POST['password']);

		require_once("../../Vista/login-estudiantes/login.php");	
	}
	
}

?>