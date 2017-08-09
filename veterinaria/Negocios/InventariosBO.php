<?php
  include_once "../Entidades/Registro.php";
  include_once "../Entidades/Mascotas.php";
  include_once "../Datos/InventarioDAO.php";

  /**
   * Fikzo
   */
  class InventariosBO
  {

    private $registro;
    private $mascotas;
    private $inventarioDAO;

    function __construct()
    {
      # code...
      $this->registro = new Registro();
      $this->mascotas = new Mascotas();
      $this->inventarioDAO = new InventarioDAO();
    }

    public function addRegistroHrs($rut, $nombre, $telefono, $email, $fecha, $comentario)
    {
      $retorno = FALSE;
      if(!is_null($rut) && !empty($rut))
			{
				if(!is_null($nombre) && !empty($nombre))
				{
					if(!is_null($telefono) && !empty($telefono))
					{
						if(!is_null($email) && !empty($email))
						{
							if(!is_null($fecha) && !empty($fecha))
							{
                $this->registro->rut = $rut;
								$this->registro->nombre = $nombre;
								$this->registro->telefono = $telefono;
								$this->registro->email = $email;
								$this->registro->fecha = $fecha;
								$this->registro->comentario = $comentario;
								$retorno = $this->inventarioDAO->addRegistroHrs($this->registro);
							}
						}
					}
				}
			}
			return $retorno;
    }
    #Fin public function addRegistroHrs

    public function addRegistroMas($microchip, $nombre, $raza, $sexo, $especie, $color, $fecha)
    {
      $retorno = FALSE;
      if(!is_null($microchip) && !empty($microchip))
			{
				if(!is_null($nombre) && !empty($nombre))
				{
					if(!is_null($raza) && !empty($raza))
					{
						if(!is_null($especie) && !empty($especie))
						{
							if(!is_null($color) && !empty($color))
							{
                $this->mascotas->microchip = $microchip;
								$this->mascotas->nombre = $nombre;
								$this->mascotas->raza = $raza;
								$this->mascotas->sexo = $sexo;
								$this->mascotas->especie = $especie;
								$this->mascotas->color = $color;
                $this->mascotas->fecha = $fecha;
								$retorno = $this->inventarioDAO->addRegistroMas($this->mascotas);
							}
						}
					}
				}
			}
			return $retorno;
    }
    #Fin public function addRegistroMas


  }



?>
