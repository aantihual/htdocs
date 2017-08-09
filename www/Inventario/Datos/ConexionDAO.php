<?php
    class ConexionDAO 
    {
            private $Servidor;
            private $BD;
            private $Usuario;
            private $Password;
		
	public function __construct()
	{
            $this->Servidor = "localhost";
            $this->BD = "Inventario";
            $this->Usuario = "root";
            $this->Password = "";
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
	public function RetornaPassword()
	{
            return $this->Password;	
	}

		/**
		 * [Obtiene el valor de la atribución según llamado]
		 * @param  [type] $property [el nombre de la propiedad que se debe asignar]
		 * @return [type]           [obtiene el valor de la propiedad]
		 */
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

