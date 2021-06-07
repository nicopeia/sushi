<?php



class vistasModelo{

protected static function obtener_vista_modelo($vistas){

           $listaBlanca=["index"];

           if(is_array($vistas,$listaBlanca)){

               if(is_file("./vistas/contenidos/".$vistas."-view.php")){
                $contenido = "./vistas/contenidos/".$vistas."-view.php";
               }else{
                $contenido ="404";
               }

           }elseif ($vistas=="login" || $vistas=="index") {

              $contenido = "index";
               
           }else{
               $contenido = "404";
           }


return $contenido;


}



}