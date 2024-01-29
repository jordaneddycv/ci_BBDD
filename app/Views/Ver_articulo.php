<?php $session = session();?>
  
<h1>Articulos en linea</h1>

<!--  -->
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



<!--  -->

<div style="display: flex;">    
<?php
for ($i=0; $i < count($articulos); $i++){
?>
<?php 
$rutaImagen = $articulos[$i]['imagen'];
?>
<div class="card mx-auto p-1" style="width: 20%;">
<img src="<?php echo base_url() . 'imagenes/' . $rutaImagen; ?>" class="card-img-top" width="100%" height="100%" alt="...">
<div class="card-body">
<h5 class="card-title"><?php echo $articulos[$i]['articulo']?></h5>
<p class="card-text">Unidades disponibles: <?php echo $articulos[$i]['cantidad']?></p>
<p class="card-text">Precio: <?php echo $articulos[$i]['precio']?> €</p>
<a href="" class="btn btn-primary">Ver producto</a>
</div>
</div>
<?php 
}
?>
</div> 


</body>
</html>