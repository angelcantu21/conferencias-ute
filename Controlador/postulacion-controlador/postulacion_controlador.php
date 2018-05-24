<?php

class controlador_postulacion
{

	public function get_postulaciones()
	{
		//Se llama al modelo desde la vista en la que estemos
		require_once("../../Modelo/postulacion_modelo.php");

		$post=new postulacion_modelo();
		$matrizPost=$post->get_postulantes();



		    foreach ($matrizPost as $fila) {
		echo '
		    <tr>
		        <td align="center" class="columnas">'.$fila["idpostulacion"].' </td>
		        <td align="center" class="columnas">'.$fila["nombre"]." ".$fila["apellidos"].'</td>
		        <td align="center" class="columnas">'.$fila["tema"].'</td>
		        <td align="center" class="columnas">'.$fila["descripcion"].'</td>
		        <td align="center" class="columnas">'.$fila["correo"].'</td>
		        <td align="center" class="columnas">'.$fila["telefono"].'</td>
		        './/<td align="center" class="acciones"><a href="modificar_slider.php?id='.$fila["idpostulacion"].'">Modificar</a></td>.
		        '<td align="center" class="acciones"><a href="eliminar_postulacion.php?id='.$fila["idpostulacion"].'">Eliminar</a></td>
		   </tr>';
		        }

		//Se llama a la vista desde donde pongamos nuestra funcion
		require_once("../../Vista/admin/postulacion-updel.view.php");
	}

	public function delPostulacion()
    {
        require_once("../../Modelo/postulacion_modelo.php");

        $post= new postulacion_modelo();
        $del=$post->del_postulacion($_GET['id']);

        require_once("../../Vista/admin/postulacion-updel.php");
    }

    public function insertPostulacion()
    {
    	require_once ('../../Modelo/postulacion_modelo.php');

    	$post=new postulacion_modelo();
    	$insert=$post->insert_postulacion($_POST['nombre'],$_POST['apellidos'],$_POST['tema'],$_POST['mensaje'],$_POST['correo'],$_POST['telefono']);

    	//require_once ('../../Vista/postulacion/postulacion.php');
    }
}
?>