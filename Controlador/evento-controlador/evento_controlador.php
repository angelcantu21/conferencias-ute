<?php

class evento_controlador
{

	public function getEventosEv()
    {

        //Se llama al modelo
		require_once("../../Modelo/evento_modelo.php");

		$evento=new evento_modelo();

		$matrizEventos=$evento->get_eventos_ev('evento');



    	foreach ($matrizEventos as $fila){
    		echo '
        <div class="content-all">
        
        <div class="content-img">
            
            <img src="../../assets/imagenes/detalles/'.$fila["imagen"].'" width="600" height="320">
            
            <div class="content-txt">
                <h2>'.$fila["nombre_evento"].'</h2>
                <p>'.$fila["descripcion_evento"].'</p>      
                <a href="../detalles/detalles.php?id='.$fila["idevento"].'"><button>Detalles..</button></a>          
            </div>
            
            <div class="content-1"></div>
            
        </div>  
    </div>'; 
	}

		//Se llama a la vista
		require_once("../../Vista/eventos/eventos.view.php");
	}

    public function getEventosConf()
    {

        //Se llama al modelo
        require_once("../../Modelo/evento_modelo.php");

        $evento=new evento_modelo();

        $matrizEventos=$evento->get_eventos_ev('conferencia');



        foreach ($matrizEventos as $fila){
            echo '
        <div class="content-all">
        
        <div class="content-img">
            
            <img src="../../assets/imagenes/detalles/'.$fila["imagen"].'" width="600" height="320">
            
            <div class="content-txt">
                <h2>'.$fila["nombre_evento"].'</h2>
                <p>'.$fila["descripcion_evento"].'</p>      
                <a href="../detalles/detalles.php?id='.$fila["idevento"].'"><button>Detalles..</button></a>          
            </div>
            
            <div class="content-1"></div>
            
        </div>  
    </div>'; 
    }

        //Se llama a la vista
        require_once("../../Vista/conferencias/conferencia.view.php");
    }

    public function getEventosConcursos()
    {

        //Se llama al modelo
        require_once("../../Modelo/evento_modelo.php");

        $evento=new evento_modelo();

        $matrizEventos=$evento->get_eventos_ev('concurso');



        foreach ($matrizEventos as $fila){
            echo '
        <div class="content-all">
        
        <div class="content-img">
            
            <img src="../../assets/imagenes/detalles/'.$fila["imagen"].'" width="600" height="320">
            
            <div class="content-txt">
                <h2>'.$fila["nombre_evento"].'</h2>
                <p>'.$fila["descripcion_evento"].'</p>      
                <a href="../detalles/detalles.php?id='.$fila["idevento"].'"><button>Detalles..</button></a>          
            </div>
            
            <div class="content-1"></div>
            
        </div>  
    </div>'; 
    }

        //Se llama a la vista
        require_once("../../Vista/concursos/concursos.view.php");
    }

    public function getEventosTabla()
    {
        //Se llama al modelo
        require_once("../../Modelo/evento_modelo.php");

        $eventos=new evento_modelo();

        $matrizEventos=$eventos->get_eventos_tabla();



            foreach ($matrizEventos as $fila) {
        echo '
            <tr>
                <td align="center" class="columnas">'.$fila["tipo_evento"].'</td>
                <td align="center" class="columnas">'.$fila["nombre_evento"].'</td>
                <td align="center" class="columnas">'.$fila["descripcion_evento"].'</td>
                <td align="center" class="columnas">'.$fila["edificio_evento"].'</td>
                <td align="center" class="columnas">'.$fila["fecha_evento"].'</td>
                <td align="center" class="columnas">'.$fila["hora_inicio"].'</td>
                <td align="center" class="columnas">'.$fila["hora_final"].'</td>
                './/<td align="center" class="columnas">'.$fila["imagen"].'</td>
                '<td align="center" class="acciones"><a href="modificar_evento.php?id='.$fila["idevento"].'"><button class="boton_actualizar">Modificar</button></a></td>
                <td align="center" class="acciones"><a href="eliminar_evento.php?id='.$fila["idevento"].'"><button class="boton_eliminar">Eliminar</button></a></td>
           </tr>';
                }

        //Se llama a la vista
        require_once("../../Vista/admin/evento-updel.view.php");
    }

    public function getEventoDetalles()
    {
         //Se llama al modelo
        require_once("../../Modelo/evento_modelo.php");

        $eventos=new evento_modelo();
        $matrizEventos=$eventos->get_eventos_detalles($_GET['id']);

        foreach ($matrizEventos as $fila) {
        echo '<div class="contenido-detalles">
                <center><h1 class="titulo-detalles">Tema: '.$fila["nombre_evento"].'</h1></center>
                <img src="../../assets/imagenes/detalles/'.$fila["imagen"].'" class="imagen-detalles">
                <p class="parrafo-detalles"><b>Descripcion: </b>'.$fila["descripcion_evento"].'</p>
                <p class="edificio-detalles"><b>Edificio: </b>'.$fila["edificio_evento"].'</p>
                <p class="fecha-detalles"><b>Fecha: </b>'.$fila["fecha_evento"].'</p>
                <p class="fecha-detalles"><b>Horario: </b>'.$fila["hora_inicio"].' - '.$fila["hora_final"].'</p>';

            if (date("Y-m-d") == $fila["fecha_evento"]){//Compara si la fecha actual es igual a la del evento
                    //Si dentro de la fecha tambien se encuentra la hora actual dentro del rango de la hora inicial y final
                if(date("G:i:s") < $fila["hora_inicio"]){
                    echo '<br><p class="texto-hoy">Hoy es el dia del evento - <a style="color: red;">El evento esta por comenzar</a></p></div>';
                }else if (date("G:i:s") > $fila["hora_inicio"] && date("G:i:s") < $fila["hora_final"]) {
                    //Se muestra el siguiente mensaje
                    echo '<br><p class="texto-hoy">Hoy es el dia del evento - <a style="color: green;">Evento en progreso</a></p></div>';
                }
                else if(date("G:i:s") > $fila["hora_final"]){
                    echo '<br><p class="texto-hoy">Hoy es el dia del evento - <a style="color: red;">El evento ha terminado</a></p></div>';
                }
                
            }else if(date("Y-m-d") > $fila["fecha_evento"])
            {
                echo '<br><p class="texto-hoy"><a style="color: red;">El evento ha pasado de fecha</a></p></div>';
            }else if(date("Y-m-d") < $fila["fecha_evento"])
            {
                $fecha_actual = strtotime(date("Y-m-d")); 

                $fecha_evento = strtotime($fila["fecha_evento"]); 

                $diff = $fecha_evento - $fecha_actual; 

                echo '<br><p class="texto-hoy"><a style="color: red;">Faltan '.round($diff / 86400).' dia(s) para el evento</a></p></div>';
            }
            else
            {
                //Y si no esta dentro de la fecha, solamente se cierra el contenedor
                echo '<br><p class="texto-hoy"><a style="color: red;">Evento no disponible</a></p></div>';
                //echo '</div';
            }
        }

        //Se llama a la vista o archivo
        require_once("../../Vista/detalles/detalles.view.php");
    }

    public function getEventosModificar()
    {
        require_once("../../Modelo/evento_modelo.php");

        $eventos= new evento_modelo();
        $matrizEventos=$eventos->get_eventos_detalles($_GET['id']);

        foreach ($matrizEventos as $fila) {
        echo '    
            <form action="modificar_evento.php?id='.$fila["idevento"].'" method="POST" enctype="multipart/form-data">
            <label for="Categorias">Tipo de evento</label>
            <select name="Categorias">
                <option value="'.$fila["tipo_evento"].'">'.$fila["tipo_evento"].'</option>
                <option value="conferencia">Conferencia</option>
                <option value="evento">Evento</option>
                <option value="concurso">Concurso</option>  
            </select>
            <label for="titulos">Nombre del evento:</label>
            <input type="text" REQUIRED placeholder="Nombre del evento" name="titulo" value="'.$fila["nombre_evento"].'">
            <label for="titulos">Descripcion del evento:</label>
            <textarea REQUIRED placeholder="Descripcion del evento (200 caracteres)" name="descripcion">'.$fila["descripcion_evento"].'</textarea>
            <label for="titulos">Edificio:</label>
            <input type="text" REQUIRED placeholder="Ejemplo: D-1" name="edificio" value="'.$fila["edificio_evento"].'">
            <label for="titulos">Fecha de emision:</label>
            <input type="date" name="fecha" value="'.$fila["fecha_evento"].'">
            <label for="titulos">Inicio:</label>
            <input type="time" name="hora_inicio" value="'.$fila["hora_inicio"].'">
            <label for="titulos">Final:</label>
            <input type="time" name="hora_final" value="'.$fila["hora_final"].'">
            <input type="submit" name="submit" value="Modificar Evento">
            </form>';
        }

        require_once("../../Vista/admin/modificar_evento.view.php");
    }

    public function delEvento()
    {
        require_once("../../Modelo/evento_modelo.php");

        $evento= new evento_modelo();
        $del=$evento->del_evento($_GET['id']);

        require_once("../../Vista/admin/evento-updel.php");
    }

    public function insertEvento()
    {
        require_once("../../Modelo/evento_modelo.php");

        $evento= new evento_modelo();
        $insert=$evento->insert_evento($_POST['Categorias'],$_POST['titulo'],$_POST['descripcion'], $_POST['edificio'],$_POST['fecha'],$_POST['hora_inicio'],$_POST['hora_final'],basename($_FILES['image']['name']));
        echo "<script>alert('El elemento se ha subido correctamente')</script>";
        echo '<meta http-equiv=refresh content=1;URL=evento-updel.php>';//para refrescar la pagina
        
        //require_once("../../Vista/admin/subir.php");
    }

    public function updateEvento()
    {
        require_once("../../Modelo/evento_modelo.php");

        $evento= new evento_modelo();
        $update=$evento->update_evento($_POST['Categorias'],$_POST['titulo'],$_POST['descripcion'], $_POST['edificio'],$_POST['fecha'],$_POST['hora_inicio'],$_POST['hora_final'],$_GET['id']);

        require_once("../../Vista/admin/modificar_evento.php");
    }
}

?>
