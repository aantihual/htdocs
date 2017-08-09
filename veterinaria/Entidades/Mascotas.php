<?
  /**
   * Fikzo
   */
  class Mascotas
  {
    private $id;
    private $microchip;
    private $nombre;
    private $raza;
    private $sexo;
    private $especie;
    private $color;
    private $fecha;

    function __construct()
    {
      $this->id = "0";
      $this->microchip = "";
      $this->nombre = "";
      $this->raza = "";
      $this->sexo = "";
      $this->especie = "";
      $this->color = "";
      $this->fecha = "";
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
