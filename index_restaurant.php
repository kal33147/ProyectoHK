<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hkitchen</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/hk.png" rel="icon">
  <!--link href="img/apple-touch-icon.png" rel="apple-touch-icon"-->

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="index.html" class="scrollto"><span>Hidden Kitchen</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
         
           <li><a href="TipodeCapacitacion.html">Aviso de privacidad</a></li>
           <li class="drop-down"> <a> <?php  
          echo $_SESSION['restaurant'];
          ?></a>
            <ul>
                <li><a href="http://localhost/ProyectoHK10/proyecto_10mo/salir.php">Cerrar Sesión</a></li>
            </ul>
        </li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->

  <!--==========================
    seccion de formulario
  ============================-->
  <section id="intro" class="clearfix">
    <br>
  <br>
  <br>
  <br>
  <br>
  <br>
   <div class="container">
      <div  class="row justify-content-center align-self-center">
        <h1>Bienvenido <?php 
          echo $_SESSION['restaurant'];
          ?></h1>
          <h2>Restaurante</h2>
        
      </div>

    </div>

  </section><!-- form -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>