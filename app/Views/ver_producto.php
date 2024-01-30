<center>
  <style>
    td,tr{
      border: 1px solid black;
      font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    body{
    background-color:#eae6ca;
  }
  </style>
<table id="name" style="margin-top: 8%; text-align: center;
    border: 1px solid black;
    width: 88vh;
    font-size: 2rem;">
    <tr>

    <!-- **************************************************************************************************** -->
        <td rowspan="4">

        <?php
// for ($i=0; $i < count($articulos); $i++){
// ?>
 <?php 
// $rutaImagen = $articulos[$i]['imagen'];
// $rutaImagen2 = $articulos[$i]['imagen2'];
?>



       
  <?php 
    if($articulos[0]['imagen2']==""){  ?>   
        <img src="<?php echo base_url() . 'imagenes/' . $articulos[0]['imagen']; ?>" class="d-block w-100" alt="..." width="100%" height="100%">
      
      <?php
    }else if($articulos[0]['imagen2']!=""){
  ?>
 <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">


  <div class="carousel-item active">
        <img src="<?php echo base_url() . 'imagenes/' . $articulos[0]['imagen']; ?>" class="d-block w-300" alt="...">
      </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(). 'imagenes/' .$articulos[0]['imagen2']; ?>" width="100%" height="100%" class="d-block w-100" alt="...">
    </div>

    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <?php }  ?>
  



<?php 
//
?>


        </td>




<!-- **************************************************************************************************** -->
        <td>Articulo: <br> <?php echo $articulos[0]['articulo']; ?></td>
    </tr>
    <tr>
        <td>Descripcion: <br> <?php echo $articulos[0]['descripcion']; ?></td>
    </tr>
    <tr>
        <td>Precio: <br> <?php echo $articulos[0]['precio']; ?> €</td>
    </tr>
    <tr>
        <td>Cantidades del producto: <br> <?php echo $articulos[0]['cantidad']; ?> </td>
    </tr>
    <tr>
        <td colspan="2">Fecha Publicada: <?php echo $articulos[0]['fecha']; ?></td>
    </tr>
</table>
</center>
<?php $session=session();?>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">☰</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Compra seguro y confiado</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">
    <p style="font-size: 2rem;">Bienvenid@ <?php echo $session->get('usuario')?></p>
    <div>
    <a href="<?php echo base_url('articulos/ver_productos') ?>" class="btn btn-info mb-2">Ver productos</a><br>
                  <!-- btn -->
                  <a href="<?php echo base_url('articulos/alta_articulo') ?>" class="btn btn-info mb-5">Subir producto</a>
               </div>
               <div>
                  <!-- btn -->
                  <a href="<?php echo base_url('area/bienvenida') ?>" class="btn btn-danger">Deslogar</a>
               </div>   
  </div>
</div>
</body>
</html>