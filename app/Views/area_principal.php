<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallacapi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>/favicon-32x32.png">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <style>
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
            text-align:center;
        }
        #popup{
            width:20%;
            height:55%;
        }
        #registrarse{
            font-size:1.5rem;
        } 

       

        /* Estilos para la ventana emergente */
        .popup2 {
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
            text-align:center;
        }
        #popup2{
            width:20%;
            height:55%;
        }
        #registrarse2{
            font-size:1.5rem;
        } 
    </style>
</head>
<body>


<div id="overlay" class="overlay"></div>

<!-- Contenido del Pop-up -->
<div id="popup" class="popup">
        <img src="<?php echo base_url()?>/wallacapi.png" alt="" width="100%">
        <form action="<?php echo base_url()?>usuarios/check" method="post"action="" id="registrarse2">
        <label for=""  style="margin-right:55px;">Email:</label>
        <input type="text" name="email" required>
        <br><br>
        <label for="" style="margin-right:10px;">Password:</label>
        <input type="password" name="pass" required>
        <br><br>
        <input type="submit" value="Enviar">
        </form>
        <br>
        <button onclick="cerrarPopup(); " style="font-size:1.5rem;">Cerrar</button>
        <p>No estas registrado? Resgitrate <a onclick="mostrarPopup2()" class="">aqui</a></p>
</div>
<div id="popup2" class="popup2">
        <img src="<?php echo base_url()?>/wallacapi.png" alt="" width="100%">
        <form action="<?php echo base_url()?>usuarios/guardar" method="post" id="registrarse2">
        <label for="Nombre" style="margin-right:55px;">Nick</label>
        <input type="text" name="nombre" style="font-size:1rem;" required/>
        <br><br>
        <label for="Password" style="margin-right:10px;">Password</label>
        <input type="password" name="password" style="font-size:1rem;" required/>
        <br><br>
        <label for="Direccion" style="margin-right:7.5px;">Direccion</label>
        <input type="text" name="direccion" style="font-size:1rem;" required/>
        <br><br>
        <label for="DNI" style="margin-right:71px;">dni</label>
        <input type="text" name="dni" style="font-size:1rem;" required/>
        <br><br>
        <input type="submit" value="Enviar">
        <button onclick="cerrarPopup2()">Cerrar</button>
        </form>
</div>

<script>
    // Función para mostrar el pop-up
    function mostrarPopup() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popup').style.display = 'block';
    }
    function mostrarPopup2() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popup2').style.display = 'block';
    }

    // Función para cerrar el pop-up
    function cerrarPopup() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('popup').style.display = 'none';
    }
    function cerrarPopup2() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('popup2').style.display = 'none';
    }
</script>



      <!-- navbar -->
      <nav class="navbar navbar-expand-md position-md-absolute w-100">
         <div class="container px-0">
            <!-- navbar brand -->
            <a class="navbar-brand" href="../index.html">
               <img src="<?php echo base_url()?>/wallacapi.png" width="38%" alt="">
            </a>
            <!-- button -->

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="icon-bar top-bar mt-0"></span>
               <span class="icon-bar middle-bar"></span>
               <span class="icon-bar bottom-bar"></span>
            </button>

            <!-- collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- navbar -->
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
                  <!-- nav item -->
                  <li class="nav-item">
                     <a class="nav-link me-4" href="https://freshcart.codescandy.com/docs/index.html">Documentation</a>
                  </li>
                  <!-- nav item -->
                  <li class="nav-item">
                     <a class="nav-link" href="https://codescandy.com/contact-us/">Support</a>
                  </li>
               </ul>
               <div>
                  <!-- btn -->
                  <a onclick="mostrarPopup()" class="btn btn-primary">Purchase</a>
               </div>
            </div>
         </div>
      </nav>
      <main>
         <!-- section hero img -->
         <section class="bg-light pt-lg-17 pt-10" style="background: url('https://marketplace.canva.com/EAFfop3Vk5U/1/0/1600w/canva-fondo-de-pantalla-aesthetic-delicado-con-frase-en-beige-qj6bfX6z6dE.jpg') no-repeat; background-position: center; background-size: cover">
            <div class="container">
               <!-- row -->
               <div class="row">
                  <div class="offset-lg-1 col-lg-10 col-12">
                     <!-- text -->
                     <div class="text-center">
                        <h1 class="mb-4 fw-bold">FreshCart - eCommerce HTML Template</h1>
                        <p class="lead mx-lg-18">A powerful HTML library to develop e-commerce web sites with a huge set of components and templates.</p>
                     </div>
                     <!-- img -->
                    <div class="text-center mt-10 mb-lg-n18 mb-n10">
                     
                    <div id="carouselExample" class="carousel slide pb-5">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="<?php echo base_url()?>/area/jordan.jpg" height="520.25" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="<?php echo base_url()?>/area/ZARA.png" height="520.25" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="<?php echo base_url()?>/area/juegos.png" height="520.25" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="<?php echo base_url()?>/area/chanel.jpg" height="520.25" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="<?php echo base_url()?>/area/adidas.jpg" height="520.25" class="d-block w-100" alt="...">
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
                    </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- pages -->
         <section class="pt-lg-18 pt-10 mt-lg-14 mt-10">
            <div class="container">
               <!-- row -->
               <div class="row">
                  <div class="col-lg-5">
                     <!-- text -->
                     <div class="mb-8 mt-5">
                        <span class="text-muted">Ready-to-Use</span>
                        <!-- heading -->
                        <h2 class="mt-1 mb-4">Home Pages</h2>

                        <p>Ready to create the best ecommerce website? Our Unique homepage design help you to build a ecommerce business easily.</p>
                     </div>
                  </div>
               </div>
               <!-- row -->
               <div class="row">
                  <div class="col-md-4">
                     <!-- page block -->
                     <div class="mb-4 bg-light p-10">
                        <div>
                           <!-- page block img -->
                           <a href="../index.html" class="text-inherit">
                             
                        <!-- page block content -->
                        <div class="mt-6 text-center">
                           <h3 class="h5 mb-0">
                              <a href="index-3.html" class="text-inherit">New</a>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- section -->
         <section class="my-lg-16 my-10">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <!-- heading -->
                     <div class="mb-lg-12 mb-8">
                        <span class="text-muted">eCommerce design</span>
                        <h2 class="mt-1 mb-0">Features</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="offset-lg-1 col-lg-10">
                     <!-- row -->
                     <div class="row mb-14">
                        <!-- featured block -->
                        <div class="col-lg-6">
                           <div>
                              <!-- featured img -->
                              <img src="../assets/images/overview/feature-img-1.png" alt="" class="img-fluid">
                           </div>
                        </div>
                        <!-- featured content -->
                        <div class="col-lg-5">
                           <div class="mt-lg-16 mt-8">
                              <h3>Category Dropdown</h3>
                              <p>Category dropdown plugin is a simple plugin that displays the parent and child categories in a dropdown.</p>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row mb-14">
                        <div class="offset-lg-1 col-lg-4">
                           <!-- content -->
                           <div class="mt-lg-16 mb-6 mb-lg-0">
                              <h3>Filtering Options</h3>
                              <p>
                                 Product filtering is the main way to direct your customers to browse relevant areas of your store. Filters allow them to shortlist products based on their parameters.
                              </p>
                           </div>
                        </div>
                        <div class="offset-lg-1 col-lg-6">
                           <!-- img -->
                           <div>
                              <img src="../assets/images/overview/feature-img-4.png" alt="" class="img-fluid">
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row mb-14">
                        <div class="col-lg-6">
                           <div>
                              <!-- img-->
                              <img src="../assets/images/overview/feature-img-3.png" alt="" class="img-fluid">
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col-lg-5">
                           <!-- content -->
                           <div class="mt-lg-16 mt-6">
                              <h3>Mini Cart</h3>
                              <p>
                                 Provide visual feedback when the user adds an item to their cart, and the mini cart does just that. The mini cart is often in the form of a dropdown or flyout coming
                                 from the cart icon.
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row mb-14">
                        <div class="offset-lg-1 col-lg-4">
                           <!-- content -->
                           <div class="mt-lg-16 mb-6 mb-lg-0">
                              <h3>Quick Product View</h3>
                              <p>
                                 Quickview, site users can see product details and images through an overlay window while on a product listing page. This way, they can now see all the details of a
                                 product &amp; faster way to check out products.
                              </p>
                           </div>
                        </div>
                        <div class="offset-lg-1 col-lg-6">
                           <!-- img -->
                           <div>
                              <img src="../assets/images/overview/feature-img-2.png" alt="" class="img-fluid">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="mb-14">
            <!-- container -->
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <!-- content -->
                     <div class="mb-8">
                        <span class="text-muted">Ready-to-Use</span>
                        <h2 class="mt-1 mb-4">Shop Pages</h2>

                        <p>Ready to create the best ecommerce website? Our Unique homepage design help you to build a ecommerce business easily.</p>
                     </div>
                  </div>
               </div>
               <!-- row -->
               <div class="row">
                  <!-- col -->
                  <div class="col-md-4">
                     <!-- page block -->
                     <div class="mb-6 bg-light p-10">
                        <div>
                           <!-- page block img -->
                           <a href="shop-grid.html" class="text-inherit">
                              <img src="../assets/images/overview/shop-grid-filter.jpg" alt="" class="img-fluid shadow-sm">
                           </a>
                        </div>
                        <!-- page block content -->
                        <div class="mt-6 text-center">
                           <h3 class="h5 mb-0">
                              <a href="shop-grid.html" class="text-inherit">Shop Grid Filter</a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="mb-6 bg-light p-10">
                        <!-- page block -->
                        <div>
                           <!-- page block img -->
                           <a href="shop-list.html" class="text-inherit">
                              <img src="../assets/images/overview/shop-list-filter.jpg" alt="" class="img-fluid shadow-sm">
                           </a>
                        </div>
                        <!-- page block content -->
                        <div class="mt-6 text-center">
                           <h3 class="h5 mb-0">
                              <a href="shop-list.html" class="text-inherit">Shop List Filter</a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <!-- page block -->
                     <div class="mb-6 bg-light p-10">
                        <div>
                           <!-- page block img -->
                           <a href="shop-fullwidth.html" class="text-inherit">
                              <img src="../assets/images/overview/shop-wide.jpg" alt="" class="img-fluid shadow-sm">
                           </a>
                        </div>
                        <div class="mt-6 text-center">
                           <!-- page block content-->
                           <h3 class="h5 mb-0">
                              <a href="shop-fullwidth.html" class="text-inherit">Shop Wide</a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <!-- page block -->
                     <div class="mb-6 bg-light p-10">
                        <div>
                           <!-- page block img -->
                           <a href="shop-single.html" class="text-inherit">
                              <img src="../assets/images/overview/shop-single.jpg" alt="" class="img-fluid shadow-sm">
                           </a>
                        </div>
                        <div class="mt-6 text-center">
                           <!-- page block content -->
                           <h3 class="h5 mb-0">
                              <a href="shop-single.html" class="text-inherit">Shop Single</a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <!-- page block -->
                     <div class="mb-6 bg-light p-10">
                        <!-- page block img -->
                        <div>
                           <a href="shop-cart.html" class="text-inherit">
                              <img src="../assets/images/overview/shop-cart.jpg" alt="" class="img-fluid shadow-sm">
                           </a>
                        </div>
                        <!-- page block content -->
                        <div class="mt-6 text-center">
                           <h3 class="h5 mb-0">
                              <a href="shop-cart.html" class="text-inherit">Shopping Cart</a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <!-- page block -->
                     <div class="mb-6 bg-light p-10">
                        <!-- page block img -->
                        <div>
                           <a href="shop-filter.html" class="text-inherit">
                              <img src="../assets/images/overview/shop-top-filter.jpg" alt="" class="img-fluid shadow-sm">
                           </a>
                        </div>
                        <div class="mt-6 text-center">
                           <!-- page block content -->
                           <h3 class="h5 mb-0">
                              <a href="shop-filter.html" class="text-inherit">Shop Top Filter</a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 text-center">
                     <!-- text -->
                     <p>More home pages coming soon...</p>
                  </div>
               </div>
            </div>
         </section>
         <!-- section -->
         <section class="mb-14">
            <div class="container">
               <div class="row">
                  <!-- col -->
                  <div class="col-lg-5">
                     <div class="mb-8">
                        <!-- text -->
                        <span class="text-muted">Stores Design</span>
                        <h2 class="mt-1 mb-4">Multi Vendors</h2>

                        <p>If you want to create your own eCommerce marketplace for multivendor, these stores UI design will help you get staretd.</p>
                     </div>
                  </div>
               </div>
               <!-- row-->
               <div class="row">
                  <!-- page block -->
                  <div class="col-md-4">
                     <div class="mb-6 bg-light p-10">
                        <div>
                           <!-- page block img -->
                           <a href="store-grid.html" class="text-inherit">
                              <img src="../assets/images/overview/store-grid.jpg" alt="" class="img-fluid shadow-sm">
                           </a>
                        </div>
                        <!-- page block content -->
                        <div class="mt-6 text-center">
                           <h3 class="h5 mb-0">
                              <a href="store-grid.html" class="text-inherit">Store Grid</a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <!-- page block -->
                     <div class="mb-6 bg-light p-10">
                        <!-- page block img -->
                        <div>
                           <a href="store-list.html" class="text-inherit">
                              <img src="../assets/images/overview/store-grid-list.jpg" alt="" class="img-fluid shadow-sm">
                           </a>
                        </div>
                        <!-- page block content -->
                        <div class="mt-6 text-center">
                           <h3 class="h5 mb-0">
                              <a href="store-list.html" class="text-inherit">Store List</a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <!-- page block -->
                  <div class="col-md-4">
                     <div class="mb-6 bg-light p-10">
                        <!-- page block img -->
                        <div>
                           <a href="store-single.html" class="text-inherit">
                              <img src="../assets/images/overview/store-single.jpg" alt="" class="img-fluid shadow-sm">
                           </a>
                        </div>
                        <div class="mt-6 text-center">
                           <h3 class="h5 mb-0">
                              <a href="store-single.html" class="text-inherit">Store Single</a>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- section -->
         <section class="mb-14">
            <div class="container">
               <div class="row">
                  <!-- col -->
                  <div class="col-lg-5">
                     <div class="mb-8">
                        <!-- text -->
                        <span class="text-muted">Awesome</span>
                        <h2 class="mt-1 mb-4">Features</h2>

                        <p>We provide impressive freatures for your website. You can easily build your store and ecommerce website. You will love it.</p>
                     </div>
                  </div>
               </div>
               <!-- row -->
               <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                  <!-- col -->
                  <div class="col border-end-md border-bottom">
                     <div class="p-8">
                        <!-- icon -->
                        <div class="mb-6 text-primary fs-4">
                           <i class="bi bi-bootstrap"></i>
                        </div>
                        <div>
                           <!-- content -->
                           <h5>Bootstrap 5.x,</h5>
                           <p class="mb-0">Every code snippet you ll get is written in Bootstrap 5 in a way that seamlessly integrates with dUI.</p>
                        </div>
                     </div>
                  </div>
                  <!-- col -->
                  <div class="col border-end-lg border-bottom">
                     <div class="p-8">
                        <!-- icon -->
                        <div class="mb-6 text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone">
                              <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                              <line x1="12" y1="18" x2="12.01" y2="18"></line>
                           </svg>
                        </div>
                        <div>
                           <!-- text -->
                           <h5>Fully Responsive</h5>
                           <p class="mb-0">Professionally designed, fully responsive, expertly crafted component examples you can drop into your projects.</p>
                        </div>
                     </div>
                  </div>
                  <!-- col -->
                  <div class="col border-bottom border-end-md border-end-lg-0">
                     <div class="p-8">
                        <!-- svg -->
                        <div class="mb-6 text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy">
                              <circle cx="12" cy="12" r="10"></circle>
                              <circle cx="12" cy="12" r="4"></circle>
                              <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                              <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                              <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                              <line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line>
                              <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
                           </svg>
                        </div>
                        <div>
                           <!-- content -->
                           <h5>Great Support</h5>
                           <p class="mb-0">With our support center to help you with whatever issue or questions you might have.</p>
                        </div>
                     </div>
                  </div>
                  <!-- col -->
                  <div class="col border-end-lg border-bottom">
                     <div class="p-8">
                        <!-- svg -->
                        <div class="mb-6 text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                              <circle cx="12" cy="12" r="10"></circle>
                              <line x1="2" y1="12" x2="22" y2="12"></line>
                              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                           </svg>
                        </div>
                        <div>
                           <!-- content -->
                           <h5>W3 Validated</h5>
                           <p class="mb-0">Markup validation is an important step towards ensuring the technical quality of web pages.</p>
                        </div>
                     </div>
                  </div>
                  <!-- col -->
                  <div class="col border-end-md border-bottom">
                     <div class="p-8">
                        <!-- icon -->
                        <div class="mb-6 text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                              <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                              <polyline points="2 17 12 22 22 17"></polyline>
                              <polyline points="2 12 12 17 22 12"></polyline>
                           </svg>
                        </div>
                        <div>
                           <!-- content -->
                           <h5>Slick Carousel</h5>
                           <p class="mb-0">Slick is a responsive carousel that supports multiple breakpoints, CSS3 transitions, touch events/swiping &amp; much more!</p>
                        </div>
                     </div>
                  </div>
                  <div class="col border-bottom">
                     <div class="p-8">
                        <!-- svg -->
                        <div class="mb-6 text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                              <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                              <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                           </svg>
                        </div>
                        <div>
                           <!-- content -->
                           <h5>Well Documented</h5>
                           <p class="mb-0">We provide intuitive and detailed documentation, you will certainly master this template easily.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col border-end-md border-bottom border-bottom-lg-0">
                     <div class="p-8">
                        <!-- icon -->
                        <div class="mb-6 text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                              <line x1="22" y1="2" x2="11" y2="13"></line>
                              <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                           </svg>
                        </div>
                        <div>
                           <!-- text -->
                           <h5>High Performance</h5>
                           <p class="mb-0">Our coding standards ensures this theme is lighter and it will loads your site faster.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col border-end-lg border-bottom-md border-bottom-lg-0">
                     <div class="p-8">
                        <!-- icon -->
                        <div class="mb-6 text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                              <circle cx="12" cy="12" r="3"></circle>
                              <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                           </svg>
                        </div>
                        <div>
                           <!-- content -->
                           <h5>Highly Customizable?</h5>
                           <p class="mb-0">Create something unique &amp; beautifully tailored to your needs In only a couple minutes.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col border-end-md border-end-lg-0">
                     <div class="p-8">
                        <!-- icon -->
                        <div class="mb-6 text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                              <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                              <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                           </svg>
                        </div>
                        <div>
                           <h5>Free Lifetime Updates</h5>
                           <p class="mb-0">We work hard every day to perfect the products. You will get it for free for a lifetime.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- section -->
         <section class="pt-15 bg-light">
            <div class="container">
               <!-- row -->
               <div class="row justify-content-center text-center">
                  <!-- col -->
                  <div class="col-lg-6">
                     <div>
                        <!-- heading -->
                        <h1 class="px-14 mb-4 fw-bold">Build fast. Launch faster. with FreshCart Template</h1>
                        <!-- text -->
                        <p class="px-lg-6">
                           Start working with , the Impressive design, powerful features, and easy customization making website building faster, easier and more professional than ever.
                        </p>

                        <a href="#" class="btn btn-primary mt-4">Purchase FreshCart</a>
                     </div>
                     <!-- col -->
                     <div class="mb-4 mt-14">
                        <p class="mb-0 fs-6">
                           Copyright 2023 © FreshCart eCommerce HTML Template. Made with Love from
                           <a href="https://codescandy.com/">Codescandy</a>
                           .
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <!-- Javascript-->
      <!-- Libs JS -->
      <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

      <!-- Theme JS -->
      <script src="../assets/js/theme.min.js"></script>
   

</body>
</html>