<?php

class galeria_controlador
{

	public function getGaleria(){

		//Se llama al modelo
		require_once("../../Modelo/galeria_modelo.php");

		$galeria=new galeria_modelo();

		$matrizGalerias=$galeria->get_galeria();



    	foreach ($matrizGalerias as $fila){
    		echo '
            
            <img src="../../assets/imagenes/galeria/'.$fila["ruta_galeria"].'" width="600" height="320" title="'.$fila["nombre_galeria"]."\n".$fila["descripcion_galeria"].'">'; 
	}

		//Se llama a la vista
		require_once("../../Vista/galeria/fotos.view.php");
	}

    public function getGaleriaTabla()
    {
        //Se llama al modelo
        require_once("../../Modelo/galeria_modelo.php");

        $galeria=new galeria_modelo();

        $matrizGalerias=$galeria->get_galeria_tabla();



            foreach ($matrizGalerias as $fila) {
        echo '
            <tr>
                <td align="center" class="columnas">'.$fila["idgaleria"].' </td>
                <td align="center" class="columnas">'.$fila["nombre_galeria"].'</td>
                <td align="center" class="columnas">'.$fila["descripcion_galeria"].'</td>
                <td align="center" class="columnas"><a style="color: blue;" href="../../assets/imagenes/galeria/'.$fila["ruta_galeria"].'" target="_blank">'.$fila["ruta_galeria"].'</a></td>
                <td align="center" class="acciones"><a href="galeria-updel.php?id='.$fila["idgaleria"].'" class="modificar-elemento"><button class="boton_actualizar">Modificar</button></a></td>
                <td align="center" class="acciones"><a href="eliminar_galeria.php?id='.$fila["idgaleria"].'"><button class="boton_eliminar">Eliminar</button></a></td>
           </tr>';
                }

        //Se llama a la vista
        require_once("../../Vista/admin/galeria-updel.view.php");
    }

        public function getGaleriaDetalles()
    {
        //Se llama al modelo desde la vista en la que estemos
        require_once("../../Modelo/galeria_modelo.php");
            try{

        $sliders=new galeria_modelo();

        $matrizSliders=$sliders->get_galeria_detalles($_GET['id']);

            foreach ($matrizSliders as $registro) {
        echo '
            
                <form action="modificar_galeria.php?id='.$registro["idgaleria"].'" method="POST">
                <label for="titulos">Titulo:</label>
                <input type="text" REQUIRED placeholder="Nombre de la foto" name="titulo" value="'.$registro["nombre_galeria"].'">
                <label for="titulos">Descripcion:</label>
                <textarea REQUIRED placeholder="Descripcion de foto" name="descripcion">'.$registro["descripcion_galeria"].'</textarea>
                <input type="submit" name="submit" value="Modificar elemento">
                </form>';
                }
            }catch(Exception $ex){
                
            }

        //Se llama a la vista desde donde pongamos nuestra funcion
        //require_once("../../Vista/admin/galeria-updel.view.php");
    }

    public function delGaleria()
    {
        require_once("../../Modelo/galeria_modelo.php");

        $galeria= new galeria_modelo();
        $del=$galeria->del_galeria($_GET['id']);

        require_once("../../Vista/admin/galeria-updel.php");
    }

    public function insertGaleria()
    {
        require_once("../../Modelo/galeria_modelo.php");

        $galeria= new galeria_modelo();
        $del=$galeria->insert_galeria($_POST['titulo'],$_POST['descripcion'], basename($_FILES['image']['name']));
        echo "<script>alert('El elemento se ha subido correctamente')</script>";
        echo '<meta http-equiv=refresh content=1;URL=galeria-updel.php>';//para refrescar la pagina

        //require_once("../../Vista/admin/galeria-updel.php");
    }

    public function updateGaleria()
    {
        require_once("../../Modelo/galeria_modelo.php");

        $galeria= new galeria_modelo();
        $del=$galeria->update_galeria($_POST['titulo'],$_POST['descripcion'], $_GET['id']);
        echo "<script>alert('El elemento se ha modificado correctamente')</script>";
        echo '<meta http-equiv=refresh content=1;URL=galeria-updel.php>';//para refrescar la pagina

        //require_once("../../Vista/admin/modificar_galeria.php");
    }

}


?>
