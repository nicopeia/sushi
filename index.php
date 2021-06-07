<?php

require_once "controladores/vistasControlador.php";
require_once "controladores/formularioControlador.php";



require "modelos/conexion.php";
require "modelos/formularioModelo.php";

$plantilla = new vistasControlador();
$plantilla->obtener_plantilla_controlador();

?>



 







