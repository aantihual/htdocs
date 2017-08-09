<?php
	include "../Negocios/InventariosBO.php";
	if(isset($_REQUEST["rut"]) && isset($_REQUEST["nombre"]) && isset($_REQUEST["telefono"]) && isset($_REQUEST["email"]) && isset($_REQUEST["fecha"]) && isset($_REQUEST["comentario"]))
	{
		$rut = $_REQUEST["rut"];
		$nombre = $_REQUEST["nombre"];
		$telefono = $_REQUEST["telefono"];
		$email = $_REQUEST["email"];
		$fecha = ($_REQUEST["fecha"]);
		$comentario = $_REQUEST["comentario"];
		$inventarioBO = new InventariosBO();
		$retorno = $inventarioBO->addRegistroHrs($rut, $nombre, $telefono, $email, $fecha, $comentario);
		if($retorno)
		{
			echo "Reserva realiza con exito";
		}
		else
			echo "algo pasó... verfique";
	}
?>
