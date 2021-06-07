<footer id="contacto">

<div class="contenedor">
  <h2 class="titulo">CONTACTO</h2>

<div id="alertaDanger" class="alert alert-danger alertError" role="alert">
 ERROR
</div>
<?php


$form = new formularioControlador();

$formulario= $form->formulario();


?>
  <form class="form" action="index.php" method="post">
  

    <input class="input" type="text" name="nombre" value="" placeholder="ingrese su nombre">
    <input class="input" type="email" name="email" value="" placeholder="ingrese su email">
    <input class="input" type="text" name="telefono" value=""placeholder="ingrese su telefono">
    <input class="input" type="text" name="dni" value=""placeholder="ingrese su dni">

    <textarea class="input"  name="mensaje" rows="8" cols="80" placeholder="Mensaje"></textarea>

    <input class="input" type="submit" name="submit" value="Enviar">
  
  </form>

  </div>

<p style="text-align:center">Copyright Sasha Ohana</p><br>



</footer>