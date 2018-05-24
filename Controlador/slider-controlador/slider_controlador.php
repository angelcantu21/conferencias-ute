<?php

class controlador_slider
{

	public function get_slider_control(){

		//Se llama al modelo
		require_once("../../Modelo/slider_modelo.php");

		$sliders=new slider_modelo("../../config/conexion.php");

		$matrizSliders=$sliders->get_sliders();



		    foreach ($matrizSliders as $registro) {
		echo '
		    <tr>
		        <td align="center" class="columnas">'.$registro["idSlider"].' </td>
		        <td align="center" class="columnas">'.$registro["titulo_slider"].'</td>
		        <td align="center" class="columnas">'.$registro["descripcion_slider"].'</td>
		        <td align="center" class="columnas"><a style="color: blue;" href="../../assets/imagenes/slider/'.$registro["imagen_slider"].'" target="_blank">'.$registro["imagen_slider"].'</a></td>
		        <td align="center" class="acciones"><a href="modificar_slider.php?id='.$registro["idSlider"].'"><button class="boton_actualizar">Modificar</button></a></td>
		        <td align="center" class="acciones"><a href="eliminar_slider.php?id='.$registro["idSlider"].'"><button class="boton_eliminar">Eliminar</button></a></td>
		   </tr>';
		        }

		//Se llama a la vista
		require_once("../../Vista/admin/slider-updel.view.php");
	}

	public function get_slider_principal_control()
	{
		//Se llama al modelo desde la vista en la que estemos
		require_once("./Modelo/slider_modelo.php");

		$sliders=new slider_modelo("./config/conexion.php");

		$matrizSliders=$sliders->get_sliders_principal();

		    foreach ($matrizSliders as $registro) {
		echo '
		     <li><img src="./assets/imagenes/slider/'.$registro["imagen_slider"].'" alt="imagen-not-found">
            <div class="contenedor">
                <h2 class="titulo">'.$registro["titulo_slider"].'</h2>
                <p class="texto">'.$registro["descripcion_slider"].'</p>
            </div>
            </li>';
		        }

		//Se llama a la vista desde donde pongamos nuestra funcion
		require_once("./Vista/index.view.php");
	}

	public function getSliderDetalles()
	{
		//Se llama al modelo desde la vista en la que estemos
		require_once("../../Modelo/slider_modelo.php");

		$sliders=new slider_modelo("../../config/conexion.php");

		$matrizSliders=$sliders->get_sliders_detalles($_GET['id']);

		    foreach ($matrizSliders as $registro) {
		echo '
				<form action="modificar_slider.php?id='.$registro["idSlider"].'" method="POST">
		        <label for="titulos">Titulo:</label>
    			<input type="text" REQUIRED placeholder="Nombre del slider" name="titulo" value="'.$registro["titulo_slider"].'">
    			<label for="titulos">Descripcion:</label>
    			<textarea REQUIRED placeholder="Descripcion del slider" name="descripcion">'.$registro["descripcion_slider"].'</textarea>
    			<input type="submit" name="submit" value="Modificar elemento">
    			</form>';
		        }

		//Se llama a la vista desde donde pongamos nuestra funcion
		require_once("../../Vista/admin/modificar_slider.view.php");
	}

	public function delSliders()
	{
		require_once("../../Modelo/slider_modelo.php");

		$sliders= new slider_modelo("../../config/conexion.php");
		$del=$sliders->del_sliders($_GET['id']);

		require_once("../../Vista/admin/slider-updel.php");
	}

	public function insertSliders()
	{
		require_once("../../Modelo/slider_modelo.php");

		$sliders= new slider_modelo("../../config/conexion.php");
		$del=$sliders->insert_sliders($_POST['titulo'],$_POST['descripcion'], basename($_FILES['image']['name']));
        echo "<script>alert('El elemento se ha subido correctamente')</script>";
        echo '<meta http-equiv=refresh content=1;URL=slider-updel.php>';//para refrescar la pagina
        
		//require_once("../../Vista/admin/slider-subir.php");
	}

	public function updateSliders()
	{
		require_once("../../Modelo/slider_modelo.php");

		$sliders= new slider_modelo("../../config/conexion.php");
		$update=$sliders->update_slider($_POST['titulo'],$_POST['descripcion'], $_GET['id']);

		require_once("../../Vista/admin/modificar_slider.php");
	}

}
?>