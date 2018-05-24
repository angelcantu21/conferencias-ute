<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

require_once("../../Controlador/postulacion-controlador/postulacion_controlador.php");

$galeria=new controlador_postulacion();
$galeria->insertPostulacion();
header('Location: login.php');

}

?>