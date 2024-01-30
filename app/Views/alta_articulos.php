<style>
  body{
    background-color:#eae6ca;
  }
</style>
   <?php echo validation_list_errors();
   ?>

   
   <h1>Alta de articulo de ropa</h1>
   <?php
   if(isset($guardado)){

   
   ?>
<p>Los datos se han guardado correctamente</p>
<a href="<?php echo base_url()?>">volver</a>
<?php
}
else{
?>
   <!-- <form action="<?php echo base_url()?>articulos/guardar" method="post" enctype="multipart/form-data">
        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" id="" required/>
        <br>
        <label for="articulo">Articulo</label>
        <input type="text" name="articulo" required/>
        <br>
        <label for="">Descripcion</label>
        <input type="text" name="descripcion" required/>
        <br>
        <label for="">Precio</label>
        <input type="number" min="0" name="precio" required>
        <br>
        <label for="">imagen</label>
        <input type="file" name="imagen" required>
        <label for="">imagen2</label>
        <input type="file" name="imagen2">
        <br>
        <input type="submit" value="Enviar">
    </form> -->
    <?php
    }
    ?>



<?php $session = session();?>



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








    
<form class="row g-3" action="<?php echo base_url()?>articulos/guardar" method="post" enctype="multipart/form-data" style="margin-top: 1rem;">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Cantidad</label>
    <input type="number" min="0" class="form-control" id="validationDefault01" value="Mark" name="cantidad" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Articulo</label>
    <input type="text" class="form-control" id="validationDefault02" value="Otto" name="articulo" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Precio</label>
    <input type="number" min="0" class="form-control" id="validationDefault02" value="Otto" name="precio" required>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">imagen</label>
    <input type="file" class="form-control" id="validationDefault05" name="imagen"  required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">imagen</label>
    <input type="file" class="form-control" id="validationDefault05" name="imagen2">
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>






  
</form> 



</body>
</html>