<?php
require_once 'conexion.php';


class formularioModelo{


public function formModelo($datos,$tabla){
    
    $conexion= new Conexion();
 
    $consulta = $conexion->conectar()->prepare("INSERT INTO $tabla(nombre, email, telefono, dni, mensaje)VALUES(:nombre, :email, :telefono, :dni, :mensaje)");

    $consulta->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
    $consulta->bindParam(':email', $datos['email'], PDO::PARAM_STR);
    $consulta->bindParam(':telefono', $datos['telefono'], PDO::PARAM_STR);
    $consulta->bindParam(':dni', $datos['dni'], PDO::PARAM_STR);
    $consulta->bindParam(':mensaje', $datos['mensaje'], PDO::PARAM_STR);

   
    $consulta->execute();
}


}