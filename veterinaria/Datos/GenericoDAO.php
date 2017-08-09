<?php
  include "../Datos/ConexionDAO.php";

  /**
   * Fikzo
   */
  class GenericoDAO
  {
    private $mysqli;
    private $conexion;

    function __construct()
    {
      # code...
      $this->conexion = new ConexionDAO();
    }

    public function Abrir()
    {
      $this->mysqli = new mysqli($this->conexion->RetornaServidor(), $this->conexion->RetornaUsuario(), $this->conexion->RetornaClave(), $this->conexion->RetornaBd());
      if ($this->mysqli->connect_error)
      {
        # code...
        die("Error : ".$this->mysqli->connect_error);
      }
    }

    public function Cerrar()
    {
      $this->mysqli->close();
    }
    public function Select($query)
		{
			$results = $this->mysqli->query($query);
			return $results;
		}
    public function InsertUpdateDelete($query)
		{
			$comprobador = FALSE;
			if($this->mysqli->query($query) == TRUE)
			{
				if($this->mysqli->affected_rows > 0)
				{
					$comprobador = TRUE;
				}
			}
			return $comprobador;
		}


  }



?>
