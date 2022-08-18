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
   <link href="css/estiles.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body class="bodyRes">
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
          <li><a href="registroNegocio.php">Agregar Negocio</a>
          </li>  
           <li><a href="https://tankold.000webhostapp.com/ProyectoHK10/Chat/vistas/usuarios.php">Chats</a></li>
           <li class="drop-down">
                
           <a><?php echo $_SESSION['cocina']; ?> </a>
           
            <ul class="salir">
                <li><a href="https://tankold.000webhostapp.com/ProyectoHK10/proyecto_10mo/salir.php"> Cerrar Sesión </a></li>
            </ul>
        </li>
        </ul>
      </nav><!-- .main-nav -->
     
  </header><!-- #header -->

  <!--==========================
    seccion de formulario
  ============================-->
  <section id="intro" class="clearfix">
    <br>
  <br>
  <br>
  <br>
 
   <div class="container">
   
 <!--- ejemplo   -->
     
                 <h2>Negocios registrados:</h2>
                 <div class="container">
                     
          <!-- <a class="titulio_e btn btn-primary btn-xl " href="https://tankold.000webhostapp.com/ProyectoHK10/Chat/vistas/usuarios.php">Chats</a> -->
           
            <!--<div class="table_title">
                
         <?php //echo $_SESSION['cocina'];?>
       
           </div>-->
            <table class="tablaCocina table-hover table-striped" style="font-size: 12pt">
        <tr>
          <td><b></b></td>
          <td><b>Nombre</b></td>
          <td><b>Dirección</b></td>
          <td><b>Teléfono</b></td>
          <td><b>Imagen</b></td>
          <td><b></b></td>
        </tr>

        <?php
         include 'cn.php';
         
       $Nombre_usu= $_SESSION['cocina'];


 $sql2 = "SELECT id_usu FROM usuario where Nombre_usu='".$Nombre_usu."' ";
      $query2= mysqli_query($conexion, $sql2);
      $row2 = mysqli_fetch_array($query2);
      $id_usu = $row2['id_usu'];
      
     $sql = "SELECT * FROM cocina WHERE id_usu  ='".$id_usu."' ORDER BY id_usu DESC";
    $query = mysqli_query($conexion, $sql);
    
        $numero = 0;
        while ($row = mysqli_fetch_array($query)) {
          echo "<tr><td width=\"5%\">" . "</td>";
          echo "<td width=\"30%\">" .
            $row["Nombre_cocina"] . "</td>";
          echo "<td width=\"30%\">" .
            $row["Direccion_cocina"] . "</td>";
          echo "<td width=\"30%\">" .
            $row["Telefono_cocina"] . "</td>";
          echo "<td width=\"30%\">";
          
         echo "<img src='".$row["archivo"]."'>";
            $row["id_usu"] . "</img>";
        
        echo "<td width=\"40%\">" .
            "<a href=\"borrar.php?borrar=$row[id_cocina]\" method=\"GET\" name=\"borrar\" class=\"btn btn-danger btn-sm\" style=\"margin:20px\">"."Borrar"."</a>" . "</td><tr>";
            
          $numero++;
          
        }
        echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Cocinas Registradas: " . $numero .
          "</b></font></td></tr>";

        ?>

      </table>
      <!--Footer-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</div>

</div>

</div>

    <footer class="credits" style=position:"fixed">
        <p>© 2022 Hidden Kitchens</p>
    </footer>


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