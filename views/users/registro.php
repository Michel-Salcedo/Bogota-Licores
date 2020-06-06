<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/registro.css">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png"/>
	<meta charset="utf-8">
	<title>Bogotá Licores</title>
</head>
<body>
	<section  class="img2" style="width: 400px;height: 350px;margin: 250px 0px 0px 400px;">

			<img class="img" style="margin: 5px 1px 50px 0px" src="imagenes/logo.png">
	</section >

	<section  class="sec" style="width: 800px;margin: 250px 200px 0px 0px;padding: 10px 0px 0px 0px; "align="center" >

		<div class="text" style=" margin:  -600px 0px 20px 50px;width: 700px;height: 350px" align="center">
			<h3>Completa el formulario de registro</h3>

			<form>
			<input style="float: left; margin: 0px 0px 10px 160px" type="text" name="pnombre" placeholder="PRIMER NOMBRE">
			<input style="float: right;margin: 0px 160px 10px 0px;position: relative;" type="text" name="snombre" placeholder="SEGUNDO NOMBRE">
			<input style="float: left; margin: 0px 0px 30px 160px" type="text" name="papellido" placeholder="PRIMER APELLIDO">
			<input style="float: right;margin: 0px 160px 10px 0px" type="text" name="sapellido" placeholder="SEGUNDO APELLIDO">
			<select style="float: left; margin: 30px 0px 10px -150px">
				<option>Tipo Documento</option>
 				<option value="cc">Cedula Ciudadania</option>
  				<option value="ce">Cedula Extranjeria</option>
  				<option value="nt">NIT</option>
			</select>
			<input style="float: right;margin: 0px 160px 10px 0px" type="number" name="num" placeholder="NUMERO">
			<select style="float: left;margin: 30px 0px 10px -150px">
				<option>Localidad</option>
 				<option value="usa">Usaquén</option>
  				<option value="cha">Chapinero</option>
  				<option value="sanf">Santa Fe</option>
  				<option value="sanc">San Cristóbal</option>
  				<option value="usm">Usme</option>
  				<option value="tun">Tunjuelito</option>
  				<option value="bos">Bosa</option>
  				<option value="ken">Kennedy</option>
  				<option value="fon">Fontibón</option>
  				<option value="eng">Engativá</option>
  				<option value="sub">Suba</option>
  				<option value="bau">Barrios Unidos</option>
  				<option value="teu">Teusaquillo</option>
  				<option value="mar">Los Mártires</option>
  				<option value="ann">Antonio Nariño</option>
  				<option value="pua">Puente Aranda</option>
  				<option value="can">La Candelaria</option>
  				<option value="ruu">Rafael Uribe Uribe</option>
  				<option value="cib">Ciudad Bolívar</option>
  				<option value="sum">Sumapaz</option>

			</select>
			<input style="float: right;margin: 30px -173px 10px 0px" type="text" name="direccion" placeholder="DIRECCIÓN">
			<H5 style="float: left;margin: 60px 0px 10px -150px">Fecha nacimiento</H5><br>
			<input style="float: left;margin: 80px 0px 10px -150px" class="fecha" type="date" name="fecha" min="1970-12-31" max="2001-01-01">
			<input style="float: right;margin: 80px -173px 10px 0px " type="number" name="CEL" placeholder="CELULAR">
			<div class="check">
			<label><input type="checkbox" id="cbox1" value="first_checkbox">Deseo recibir ofertas por email</label><br>
			<input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Acepto politica y tratamiento de mis datos</label></div>
			<div class="but2">
			<p><a href="felicitaciones.php" target="_self"><button class="but" type="button">REGISTRARSE</button></a></p></div>
			</form>
		</div>
		<div class="preguntas"style="margin: 0PX 0PX 20PX 50PX;width: 700px;" align="center">
			<h3>¿Ya tienes una cuenta?</h3>
			<a href="login.php" target="_self"><button class="ini" type="button">INICIAR SESION</button></a>
		</div>
	</section>
</body>
</html>
