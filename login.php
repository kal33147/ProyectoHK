<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hkitchens</title>
  <link href="img/hk.png" rel="icon">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="loguear.php" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="Email_usu" class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="pass_usu" class="login__input" placeholder="Password" required minlength="5">
				</div>
				<button class="button login__submit" type="submit" name="btn_login">
					<span class="button__text">Ingresar</span>
				</button>
					<a id="Ar" href="registro.php">Registrarme</a>	
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>
	</div>
</div>
</body>

</html>