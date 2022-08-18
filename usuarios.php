<?php 
  session_start();
  include_once "../modelo/config.php";
  if(!isset($_SESSION['restaurant'])){
    header("location: ../../index_cocina.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <h1><?php 
          $sesion= $_SESSION['restaurant'];
          ?></h1>
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM usuario WHERE Nombre_usu = '".$sesion."'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <div class="details">
            <span><?php echo $row['Nombre_usu'] ?></span>
          </div>
        </div>
        <a href="../../index.php" class="logout">Regresar</a>
      </header>
     <div class="search">
        <span class="text">Seleccione un usuario para iniciar el chat</span>
        <input type="text" placeholder="Ingrese el nombre para buscar ...">
        <button><i class="fas fa-search"></i></button>
      </div> 
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="../js/usuarios.js"></script>

</body>
</html>
