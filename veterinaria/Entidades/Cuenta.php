<?
  /**
   *
   */
  class Cuenta
  {
    private $id;
    private $usuario;
    private $clave;
    private $nombre;
    private $email;
    private $perfil;

    function __construct()
    {
      $this->id = "0";
      $this->usuario = "";
      $this->clave = "";
      $this->nombre = "";
      $this->email = "";
      $this->perfil = "";
    }

    public function __get($property)
    {
      # code...
      if (property_exists($this, $property)) {
        # code...
        return $this->$property;
      }
    }

    public function __set($property, $value)
    {
      # code...
      if (property_exists($this, $property)) {
        # code...
        $this->$property = $value;
      }
    }
  }
?>
