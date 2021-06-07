<?php

class Conexion{


public function conectar(){

 $server ="localhost";
 $database="sushi_pruebas";
 $usuario="root";
$pass="";

try{
    $conexion = new PDO("mysql:host=$server;dbname=$database;",$usuario, $pass); 
 $conexion->exec("SET CHARACTER SET utf8");
 return $conexion;
}

catch(PDOException $e){
    die('ERROR DE CONEXION :'.$e->getMessage());
   }
}







}










$conn= new Conexion();
$conectar= $conn->conectar();


//if($conectar){
  //  echo "estoy conectado";
//}




?>