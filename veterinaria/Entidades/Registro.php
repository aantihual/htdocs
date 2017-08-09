<?php
  /**
   * Fikzo
   */
  class Registro
  {

    private $id;
    private $rut;
    private $nombre;
    private $telefono;
    private $email;
    private $fecha;
    private $comentario;

    function __construct()
    {
      # code...
      $this->id = 0;
      $this->rut = "";
      $this->nombre = "";
      $this->telefono = "";
      $this->email = "";
      $this->fecha = "";
      $this->comentario = "";

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
