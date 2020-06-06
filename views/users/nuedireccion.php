<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="estilos/nuedireccion.css">
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png"/>
    <title>Bogotá Licores</title>
</head>
<body>
    <div id="header">
        <ul class="nav">
            <li><a class="inicio" href="">INICIO</a></li>
            <li><a class="cervezas" href="">CERVEZAS</a>
            <ul>
            <li><a href="">NACIONALES</a></li>
            <li><a href="">SINTERNACIONALES</a></li>
            </li>
            </ul>
            </li>
            <li><a class="tequilas" href="">TEQUILAS</a>
            <li><a class="vinos" href="">VINOS</a>
            <li><a class="licores" href="">LICORES</a>
            <ul>
            <li><a href="">WHISKY</a></li>
            <li><a href="">VODKA</a></li>
            <li><a href="">RON</a></li>
            <li><a href="">AGUARDIENTE</a></li>
            <li><a href="">BRANDY</a></li>
            </ul>
            </li>
            <li><a class="bebidas" href="">BEBIDAS</a></li>
            <a href=""><img class="carro" href="carrocomp.php"  src="imagenes/carrito.png">
            </a>
            <a href=""><img class="usuario" src="imagenes/usuario.png"></a>
        </ul>
    </div>
    <div>
        <img class="imagen" src="imagenes/logo.png">
    </div>
    <div class="buscar"><input class="busca" type="search" placeholder=" Buscar">
    </div>

<section class="descrip">
    <div>
        <h2 style="margin: 100px 0px 0px 300px">Productos con envio.</h2>
    </div>


</section>
<section  class="sec" style="width: 800px;margin: 100px 600px 0px 0px;padding: 10px 0px 0px 0px; "align="center" >

        <div class="text" style=" margin:  0px 0px 20px 50px;width: 700px;height: 350px" align="center">
            <div style="margin: -100px 0px 0px -950px">
               <img src="imagenes/bus.png" style="width: 40px; height: 40px;margin: 50px 0px 0px 300px">
            </div>
            <div style="margin: -50px 0px 0px -500px">
               <img src="imagenes/lapiz.png"style="width: 40px; height: 40px;">
            </div>
            <div style="border: 1px solid black; width:300px; margin: -40px 0px 20px 0px;border-radius: 5px">
            <h3>Nueva dirección de envio</h3>
            </div>
            <form>
            <input style="float: left; margin: 0px 0px 30px 160px;" type="text" name="pnombre" placeholder="PRIMER NOMBRE">
            <input style="float: right;margin: 0px 160px 30px 0px;position: relative;" type="text" name="snombre" placeholder="SEGUNDO NOMBRE">
            <input style="float: left; margin: 0px 0px 30px 160px" type="text" name="papellido" placeholder="PRIMER APELLIDO">
            <input style="float: right;margin: 0px 160px 10px 0px " type="text" name="sapellido" placeholder="SEGUNDO APELLIDO">
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
            <input style="float: right;margin: 50px -50px 10px 0px " type="number" name="CEL" placeholder="CELULAR">
        </div>
        <button class="boton" type="submit"><h3>GUARDAR NUEVA DIRECCION</h3></button>
    </form>
    </section>
    <div style="margin: 40px 0px 0px 1100px;position: absolute;">
        <img src="imagenes/post.jpg" style="width: 500px;height: 500px;">
        <h2 style="position: relative;margin: -300px 0px 0px 100px">Recuerda tener a la mano<br>tu documento de identidad,<br> ya que sin el no se entregara <br> el pedido.</h2>
    </div>
<footer class="redes">
    <div class="rede">
    <a href="https://www.facebook.com"><img src="imagenes/facebook.png"></a>
    <a href="https://www.instagram.com"><img src="imagenes/instagram.jpg"></a>
    <a href="https://www.twitter.com"><img src="imagenes/twitter.jpg"></a>
    <h5>TODOS LOS DERECHOS RESERVADOS BOGOTA LICORES 2019</h5>
    <img class="chat" src="imagenes/chat.png">
    </div>
</footer>
</body>
</html>
