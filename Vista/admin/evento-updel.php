<?php session_start();

if (isset($_SESSION['usuario_admin'])) {
        //Si es de tipo aministrador se le redirige al index del panel
        require 'evento-updel.view.php';
}else if(isset($_SESSION['usuario_alumno'])){
    //Si el usuario no es de tipo administrador se redirige al index principal
        header('Location: ../../index.php');
}else{
    //Si no hay usuario entonces se le manda al login
	header('location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

//echo $_FILES['image']['name'] . '<br/>';
//ini_set('upload_max_filesize', '10M');
//ini_set('post_max_size', '10M');
//ini_set('max_input_time', 300);
//ini_set('max_execution_time', 300);

$ruta_destino = "../../assets/imagenes/detalles/";

$ruta_destino = $ruta_destino . basename($_FILES['image']['name']);

try {
    //lanzar excepción si no se puede mover el archivo
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $ruta_destino)) {
        throw new Exception('No se pudo subir el archivo');
    }

    echo "<script>alert('El archivo " . basename($_FILES['image']['name']) .
    " se ha subido')</script>";
} catch (Exception $e) {
    die('File did not upload: ' . $e->getMessage());
}

require_once("../../Controlador/evento-controlador/evento_controlador.php");

$galeria=new evento_controlador();
$galeria->insertEvento();
    
}
?>