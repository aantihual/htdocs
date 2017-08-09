<!DOCTYPE html>
<html>
<head>
	<title>.:. CV - Registar Mascota .:.</title>
    <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/formulario.css" type="text/css" media="screen">

</head>
<body>
<table width="750" border="0">
  <tr>
    <td>Espacio</td>
  </tr>
</table>
<table width="700" border="0">
  <tr>
    <td>
        <ul id="nav">
					<ul id="nav">
	            <li><a href="Inicio.php">Inicio</a></li>
	            <li><a href="#">Nosotros</a>
	                <ul>
	                    <li><a href="mision.php">Mision</a></li>
	                    <li><a href="vision.php">Vision</a></li>
	                </ul>
	            </li>
	            <li><a href="#">Mascotas</a>
	                <ul>
	                    <li><a href="busque_mascota.php">Busqueda Mascotas</a></li>
	                    <li><a href="ingre_mascota.php">Ingreso Mascota</a></li>
	                    <li><a href="modif_mascota.php">Modif. Informacion</a></li>
	                </ul>
	            </li>
	            <li><a href="reserva_atencion.php">Reserva atencion</a></li>
	            <li><a href="produ_servi.php">Productos y Servicios</a></li>
	        </ul>
    </td>
  </tr>
</table>
<table width="750" border="0">
  <tr>
    <td>
        <div class="banner"></div>
    </td>
  </tr>
</table>
<table width="750" border="0">
  <tr>
    <td><hr></td>
  </tr>
</table>
<table width="750" border="0">
  <tr>
    <td>
        <p id="titulo">Registrar Mascota</p>
        <form action="" method="post">
            <input type="number" name="microchip" id="microchip" placeholder="Microchip">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre Mascota" required/>
            <input type="text" name="raza" id="raza" placeholder="Raza" requerid/>
            <input type="text" name="sexo" id="sexo" placeholder="Sexo" required/>
            <input type="text" name="especie" id="especie" placeholder="Especie" requerid/>
            <input type="text" name="color" id="color" placeholder="Color" requerid/>
            <p id="texto">Fecha Nacimiento: </p>
            <input type="date" name="fecha" id="fecha" placeholder="Fecha de Nacimiento">
            <input type="button" value="Registar" id="boton">
        </form>
    </td>
  </tr>
</table>
<table width="750" border="0">
  <tr>
    <td><hr></td>
  </tr>
</table>
<table width="750" border="0">
  <tr>
    <td>Alexis Antihual A. - Santo Tomas - 2017</td>
  </tr>
</table>
<table width="750" border="0">
  <tr>
    <td>Fundamentos de Programación en Entorno Web</td>
  </tr>
</table>

</body>
</html>
