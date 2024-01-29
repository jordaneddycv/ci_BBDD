<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raton</title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>/favicon-32x32.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
  body{
    background-color:#f5ad56;
  }
</style>
</head>
<body>
<?php $session = session();?>
    <center>
    <h1>Bienvenid@ <?php echo $session->get('usuario')?></h1>
    </center>
    

    <h1>Tus productos</h1>

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
                  <a href="<?php echo base_url('area/bienvenida') ?>" class="btn btn-danger">deslogar</a>
               </div>   
  </div>
</div>

<div style="display: flex;">    
    <?php
    for ($i=0; $i < count($articulos); $i++){
    
    ?>
    <?php 
    $rutaImagen = $articulos[$i]['imagen'];
    $rutaImagen2 = $articulos[$i]['imagen2'];
    ?>
    <div class="card mx-auto p-1" style="width: 20%;">

    <!-- <img src="" class="card-img-top" width="100%" height="100%" alt="..."> -->
    <div id="carouselExample" class="carousel slide pb-5">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="<?php echo base_url() . 'imagenes/' . $rutaImagen; ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <?php 
                          if($rutaImagen2!=""){
                            ?>
                            
                            <img src="<?php echo base_url() . 'imagenes/' . $rutaImagen2; ?>" class="d-block w-100" alt="...">
                            
                            <?php 
                          }else{?><?php 
                          }
                          ?>
                          </div>
                        </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                        </button>
      </div>




      

    <div class="card-body">
    <h5 class="card-title"><?php echo $articulos[$i]['articulo']?></h5>
    <p class="card-text">Cantidades disponibles: <?php echo $articulos[$i]['cantidad']?></p>
    <a href="<?php echo base_url('articulos/eliminar?bye='.$articulos[$i]['cantidad']) ?>" class="btn btn-danger">Eliminar</a>
    </div>
    </div>
    <?php 
    }
    ?>
</div> 
</body>
</html>