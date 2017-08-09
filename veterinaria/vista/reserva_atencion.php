<!DOCTYPE html>
<html>
<head>
	<title>.:. CV - Reserva Atencion .:.</title>
    <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/formulario.css" type="text/css" media="screen">
		<script src="js/Validacion.js" type="text/javascript"></script>
		<?php
			#include_once "../Negocios/InventariosBO.php";
			#include_once "../Entidades/Registro.php";
		?>
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
        <p id="titulo">Reserva de Atención</p>
        <form action="" method="post">
						<p id="texto">Ingrese su rut, sin punto y con signo "-":</p>
						<input type="text" name="rut" id="rut" required oninput="checkRut(this)" placeholder="Ingrese Rut" required/>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" required/>
            <input type="number" name="telefono" id="telefono" onblur="checkTel();" maxlength="9"placeholder="Telefono" required/>
            <input type="email" name="email" id="email" placeholder="Correo" required/>
						<p id="texto">Seleccione la fecha a reservar:</p>
            <input type="date" name="fecha" id="fecha" min="2017-07-11" value="<?php echo date("Y-m-d");?>" required/>
            <textarea name="comentario" id="comentario" placeholder="comentario" required/></textarea>
            <input type="submit" value="Registar" id="boton">
        </form>
				<?php
					include_once "InventarioRegistroHrs.php";
				?>
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
