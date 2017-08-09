<?php
  /**
   * Fikzo
   */
  class ConexionDAO
  {
    private $Servidor;
    private $BD;
    private $Usuario;
    private $Clave;

    public function __construct()
    {
      # code...
      $this->Servidor = "127.0.0.1";
      $this->BD = "veterinaria";
      $this->Usuario = "root";
      $this->Clave = "";
    }
    public function RetornaServidor()
    {
      return $this->Servidor;
    }
    public function RetornaBd()
		{
			return $this->BD;
		}
		public function RetornaUsuario()
		{
			return $this->Usuario;
		}
		public function RetornaClave()
		{
			return $this->Clave;
		}

    public function __get($property)
		{
			if (property_exists($this, $property))
			{
				return $this->$property;
			}
		}
		public function __set($property, $value)
		{
			if (property_exists($this, $property))
			{
				$this->$property = $value;
    		}
		}
  }

?>
