<section class="cards contenedor">
  <h2 class="titulo">COMBOS</h2>
  <div class="content-card">
  <?php
 require_once "./base.php";
  //$total = count($imagenes);

//for ($i = 0; $i < $total; $i++)
//{
  //echo '
  //<img src="'. $imagenes[$i].'">';


//} ;// fin For
?>

  <?php

foreach($combos as $key => $value){
  echo
  '

    <article class="card">
    <img src="'. $value["imagen"].'" alt="" class="imgCombo img-fluid text-center">
      <h3 class="tituloCombo">'.$value["nombre"].'</h3>
    <p>'.$value["descripcion"].'</p>
    
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
    '.$value["tituloBtn"].'
  </button>
     </article>
 
     
   
 


    ';
  };
  
  ?>
  
    
 
 
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
       </div>
       <div class="modal-body">
         descripcion del producto cantidad de unidades / foto
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">+</button>
       </div>
     </div>
   </div>
 </div>
 </div>
 </section>


 <!-- seccion galeria -->

<section class="galeria">
<div class="contenedor">


<h2 class="titulo">algunos productos</h2>
<article class="galeria-cont">
<?php

foreach($algunosProductos as $key => $value){
  echo
  '

  <img src="'. $value["img"].'" alt="">
   
            ';
};
?>
          </article>
        </div>
        </section>




            <!-- inicio Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay mt-4">
      <h2>Menu</h2>
  
     
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">


          <h2 class="menu-section-title">SUSHI</h2>
          <hr>


          <?php

foreach($productos as $key => $value){
  echo
  '
          <div class="menu-item">
            <div class="menu-item-name"> '.$value["nombre"].'</div>
            <div class="menu-item-price">'.$value["precio"].' </div>
            <div class="menu-item-description">  '.$value["descripcion"].' </div>
            <div class="menu-item-description">  '.$value["cantidad"].' </div>
          </div>
       
          ';
        };?>
      


        </div>
      </div>


      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">PLATOS</h2>
          <hr>


          <?php

foreach($productos as $key => $value){
  echo
  '
          <div class="menu-item">
            <div class="menu-item-name"> '.$value["nombre"].'</div>
            <div class="menu-item-price">'.$value["precio"].' </div>
            <div class="menu-item-description">  '.$value["descripcion"].' </div>
            <div class="menu-item-description">  '.$value["cantidad"].' </div>
          </div>
       
          ';
        };?>
       
         
       
         
        </div>
      </div>




      
    </div>
   
 
  </div>
</div>

<!-- fin menu -->



<section class="info-last">

  <div class="contenedor last-section">

    <div class="contenedor-textos-main">
<h2 class="titulo left">Donde estamos?</h2>
<p style="margin-left:56px;">Olleros 1825 - Buenos Aires - CABA</p><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.5407575760905!2d-58.43823894204748!3d-34.56518136324604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5b840db66f9%3A0xb0075a51a92d351f!2sOlleros%201800%2C%20C1426%20CABA!5e0!3m2!1ses-419!2sar!4v1622753876552!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 
  </div>
  <img style="height: 25rem;width:35rem" id="imgSushi" src="vistas/img/blanco1.jpg" class="img-fluid" alt="">

</div>

  <div class="svg-wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:  #f5576c;"></path></svg></div>
</section>




