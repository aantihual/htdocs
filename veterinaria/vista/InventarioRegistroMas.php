<?php
	include "../Negocios/InventariosBO.php";
	if(isset($_REQUEST["microchip"]) && isset($_REQUEST["nombre"]) && isset($_REQUEST["raza"]) && isset($_REQUEST["sexo"]) && isset($_REQUEST["expecie"]) && isset($_REQUEST["color"]) && isset($_REQUEST["fecha"]))
	{
		$rut = $_REQUEST["microchip"];
		$nombre = $_REQUEST["nombre"];
		$telefono = $_REQUEST["raza"];
		$email = $_REQUEST["sexo"];
		$fecha = ($_REQUEST["expecie"]);
		$comentario = $_REQUEST["color"];
    $comentario = $_REQUEST["fecha"];
		$inventarioBO = new InventariosBO();
		$retorno = $inventarioBO->addRegistroMas($microchip, $nombre, $raza, $sexo, $especie, $color, $fecha);
		if($retorno)
		{
			echo "Se registro su Mascota con exito";
		}
		else
			echo "algo pasó... verfique";
	}
?>
