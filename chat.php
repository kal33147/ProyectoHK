<?php 
  session_start();
  include_once "../modelo/config.php";
  if(!isset($_SESSION['cocina'])){
    header("location: ../../proyecto_10mo/login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $Nombre_usu = mysqli_real_escape_string($conn, $_GET['Nombre_usu']);
          $sql = mysqli_query($conn, "SELECT * FROM usuario WHERE Nombre_usu = '".$Nombre_usu."'");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: usuarios.php");
          }
        ?>
        <a href="usuarios.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <div class="details">
          <span><?php echo $row['Nombre_usu']?></span>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="agregar-chat.php" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $Nombre_usu; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Escribe un mensaje aquí ..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="../js/chat.js"></script>

</body>
</html>
