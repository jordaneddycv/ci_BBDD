<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba BDD</title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>/favicon-32x32.png">
    <style>
        /* Estilos para el fondo oscurecido */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #545e64;
            z-index: 1000;
        }

        /* Estilos para la ventana emergente */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001; /* Un valor mayor para que esté sobre el fondo oscurecido */
            border-radius:5%;
        }
        #popup{
            width:20%;
            height:55%;
        }
        #registrarse{
            font-size:1.5rem;
        }
    </style>
</head>
<body>
    <?php 
    // $session = session();
    // $session->set('prueba',"Ramiro");
    // echo '<h1>Bienvenido '.$session->get('prueba').'</h1>'
    ?>
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    <img src="<?php echo base_url()?>/wallacapi.png" alt="" width="100%">
    <!-- <a href="<?php echo base_url() ?>Usuarios/index">Alta de usuario</a> -->
    <a href="<?php echo base_url() ?>articulos/alta_articulo">Alta de articulos</a>
    <a href="<?php echo base_url() ?>articulos/ver">Ver de articulos</a>
    <a href="<?php echo base_url() ?>Tiendas/verTienda">Ver tiendas</a>
 
    <h1>Gestion de <?php echo $xd?></h1>

