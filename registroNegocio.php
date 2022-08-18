<?php 
session_start();
$id = $_SESSION['cocina'];
?>
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
        <h1 class="text-light"><a href="index.php" class="scrollto"><span>Hidden Kitchen</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>

           <li class="drop-down"><a><?php  
          echo $_SESSION['cocina'];
          ?> </a>
            <ul>
                <li><a href="https://tankold.000webhostapp.com/ProyectoHK10/proyecto_10mo/salir.php">Cerrar Sesión</a></li>
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
        
        <form class="login" action="AgregarNegocio.php" method="POST" enctype="multipart/form-data">
            <h1>Registro de Negocio</h1>
            
            
           
             <input type="text" class="login__input" name="Nombre_cocina" placeholder="Nombre de la locación">
            
            <input type="text" class="login__input" name="Direccion_cocina" placeholder="Dirección">
            
            <input type="text" class="login__input" name="Telefono_cocina" placeholder="Teléfono">
       
            
            <div class="login__field">
                
                <input class="doc1" placeholder="Foto del Negocio:" readonly>
                
                <input class="doc3" type="file" name="archivos"  />
            </div>
            
            
            
            
            <div class="login__field">
                
                <input class="doc2" placeholder="INE/IFE:" readonly>
                
                <input class="doc4" type="file" name="archivo[]"  />
            </div>
            
            
            <div class="login__field">
                <input class="doc2" placeholder="Recibo:" readonly>
                <input class="doc4" type="file"  name="archivo[]" />
            </div>
            
            <input type="text" class="id" name="id" value="<?php echo $id; ?>" hidden>
          
            <div class="login__field">
                <input class="doc2" placeholder="Permiso:" readonly>
                <input class="doc4" type="file"  name="archivo[]"  />
            </div>
         
            
            <button class="button login__submit" type="submit">
            
                <span class="button__text">Ingresar Negocio</span>
            </button>
        </form>
        
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