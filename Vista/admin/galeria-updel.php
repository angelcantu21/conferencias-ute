<?php session_start();

if (isset($_SESSION['usuario_admin'])) {
        //Si es de tipo aministrador se le redirige al index del panel
        require 'galeria-updel.view.php';
}else if(isset($_SESSION['usuario_alumno'])){
    //Si el usuario no es de tipo administrador se redirige al index principal
        header('Location: ../../index.php');
}else{
    //Si no hay usuario entonces se le manda al login
	header('location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];

$ruta_destino = "../../assets/imagenes/galeria/";

$ruta_destino = $ruta_destino . basename($_FILES['image']['name']);

try {
    //lanzar excepción si no se puede mover el archivo
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $ruta_destino)) {
        throw new Exception('No se pudo subir el archivo');
    }
} catch (Exception $e) {
    die('File did not upload: ' . $e->getMessage());
}

require_once("../../Controlador/galeria-controlador/galeria_controlador.php");

$galeria=new galeria_controlador();
$galeria->insertGaleria();

}

?>