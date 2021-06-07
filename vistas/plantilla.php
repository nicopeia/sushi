<?php

    
require_once "controladores/vistasControlador.php";
$instanciaVistas = new vistasControlador();

$vistas= $instanciaVistas->obtener_vistas_controlador();
?>
<!DOCTYPE html>
<html>
  <head>
  <?php 
  include   "./vistas/links/link.php";
  
  ?>
  
  
  </head>

<body>
    
<?php 

include  "./vistas/contenidos/navBar.php";
 include  "./vistas/contenidos/header.php"; 
 include  "./vistas/contenidos/banner.php"; 
 include  "./vistas/contenidos/main.php"; 



include  "./vistas/contenidos/footer.php"; 
include   "./vistas/includes/script.php"; 

?>

</body>
</html>
