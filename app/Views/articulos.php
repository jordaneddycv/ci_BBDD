<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba BDD</title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>/favicon-32x32.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
<body>
<html>
<div>
     <?php
    // for ($i=0; $i < count($articulos); $i++){
     ?>
    <!-- <p>a:<?php //echo $articulos[$i]['cantidad']?></p>
    <p>b:<?php //echo $articulos[$i]['articulo']?></p>
    <p>c:<?php //echo $articulos[$i]['descripcion']?></p> -->
    <?php 
    // $rutaImagen = base_url('imagenes/'.$articulos[$i]['imagen'])
    // }
    ?>
    <!-- <p>d:<img src="<?php //echo $rutaImagen ?>" alt=""></p> -->
    <hr>
</div>

<div style="display: flex;">
<?php
    for ($i=0; $i < count($articulos); $i++){
?>
    <?php 
    $rutaImagen = $articulos[$i]['imagen'];
    ?>
    <div class="card" style="width: 18rem;">
    <img src="<?php echo base_url() . 'imagenes/' . $rutaImagen; ?>" class="card-img-top" width="100%" height="100%" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php echo $articulos[$i]['cantidad']?></h5>
    <p class="card-text"><?php echo $articulos[$i]['articulo']?></p>
    <a href="#" class="btn btn-primary"><?php echo $articulos[$i]['descripcion']?></a>
    </div>
    </div>
    <?php 
    }
    ?>
</div>      
</body>
</html>