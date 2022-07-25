<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hkitchens</title>
  <link href="img/hk.png" rel="icon">
</head>
<body>
<link rel="stylesheet" href="estilo/style.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="Registrar.php" method="post">
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="Nombre_usu" class="login__input" placeholder="Nombre Completo">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="Email_usu" class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="Telefono_usu" class="login__input" placeholder="Telefono">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="Contra_usu" class="login__input" placeholder="Password">
				</div>
				<div class="login__field">
					<p class="ps">Soy dueño de:</p>
					<select name="Tipo_usu">
						<option value= 0 ></option>
						<option value= 1 >Restaurante</option>
						<option value= 2 >Cocina</option>
					  </select>
				</div>
            
				<button class="button login__submit" type="submit" name="btn_Regis">
					<span class="button__text">Registrarme</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
					<a href="login.php">¿Ya tienes una cuenta? Ingresar
                    </a>
			
				
               
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