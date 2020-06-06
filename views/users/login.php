<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png"/>
	<link rel="stylesheet" type="text/css" href="estilos/login.css">
	<meta charset="utf-8">
	<title>Bogotá Licores</title>
</head>
<body>
	<img class="img" align="left" style="margin: 250px 1px 50px 350px" src="imagenes/logo.png">
	<section style="width: 600px;margin: 200px 400px 0px 0px;padding: 30px 80px 0px 0px;" >

		<div class="text" style=" margin:  60px 0px 20px 0px;width: 500px;" align="center">
			<h3>Para continuar, inicia sesión en Bogotá Licores</h3><br>
			<form>
			<input type="email" class="email"
       		pattern="@" placeholder="Dirección de correo" required>
			<p><input type="password" name="pass" placeholder="Contraseña" class="pass"></p><br>
			<button class="boton" type="submit">INICIAR SESIÓN</button>
			<input class="check" type="checkbox" name="check"><h5 class="redc" style="margin: 0 0 0 120px;">Recordarme</h5>
		</form>
		</div>
		<div class="preguntas"style="margin: 0PX 0PX 20PX 0PX;width: 500px;" align="center"><br>
			<a href="restablecer.php" target="_self"><br><h3>¿Se te ha olvidado el código?</h3></a>
			<h3>¿No tienes cuenta?</h3>
			<a href="registro.php" target="_self"><button type="button">REGISTRATE AHORA</button></a>
		</div>
	</section>
</body>
</html>
