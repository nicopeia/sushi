<?php


class formularioControlador{

    public function formulario(){

        
        
            if(isset($_POST['submit'])){
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $telefono = $_POST['telefono'];
                $dni = $_POST['dni'];
                $mensaje = $_POST['mensaje'];
               
                $datos = array("nombre"=>$_POST['nombre'],"email"=>$_POST['email'],"telefono"=>$_POST['telefono'],
                "dni"=>$_POST['dni'],"mensaje"=>$_POST['mensaje']);
                $tabla= "sushi_contacto";
           
              
              
                  if(empty( $nombre ) || empty($email ) || empty($telefono) || empty($dni) || empty($mensaje) ){
                      echo 'error   ';
                     
                    
                  }else{
                     
                   
                    echo '<div id="mensajeEnviado" class="alert alert-danger" role="alert">
                  
                    </div>';
                  $respuesta= new formularioModelo;
                  $respuesta->formModelo($datos,$tabla);
                                   

                  }

    }

  
}

}