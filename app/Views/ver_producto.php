<table>
    <tr>

    <!-- **************************************************************************************************** -->
        <td rowspan="3">

        <?php
// for ($i=0; $i < count($articulos); $i++){
// ?>
 <?php 
// $rutaImagen = $articulos[$i]['imagen'];
// $rutaImagen2 = $articulos[$i]['imagen2'];
?>



        <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <?php 
    if($articulos[0]['imagen2']==""){  ?>
        <div class="carousel-item active">
        <img src="<?php echo base_url() . 'imagenes/' . $articulos[0]['imagen']; ?>" class="d-block w-100" alt="...">
      </div>
      <?php
    }else if($articulos[0]['imagen2']!=""){
  ?>
  <div class="carousel-item active">
        <img src="<?php echo base_url() . 'imagenes/' . $articulos[0]['imagen']; ?>" class="d-block w-100" alt="...">
      </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(). 'imagenes/' .$articulos[0]['imagen2']; ?>" class="d-block w-100" alt="...">
    </div>
    <?php }  ?>
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



<?php 
//
?>


        </td>




<!-- **************************************************************************************************** -->
        <td>Articulo:</td>
    </tr>
    <tr>
        <td>Descripcion:</td>
    </tr>
    <tr>
        <td>Precio:</td>
    </tr>
    <tr>
        <td>Fecha:</td>
    </tr>
</table>

</body>
</html>