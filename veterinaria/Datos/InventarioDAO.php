<?php
  /**
   * Fikzo
   */
  #include "../Entidades/Cuenta.php";
  #include "../Entidades/Registro.php";
  include "../Datos/GenericoDAO.php";

  class InventarioDAO
  {
    #private $registro;
    private $inventarioDAO;

    function __construct()
    {
      # code...
      $this->genericoDAO = new GenericoDAO();
    }

    public function addRegistroHrs($registro)
    {
      $retorno = FALSE;
      if (!is_null($registro))
      {
        # code...
        $query ="insert into registro(rut, nombre, telefono, email, fecha, comentario) ";
        $query = $query."values('".$registro->rut."','".$registro->nombre."',".$registro->telefono.", '".$registro->email."', '".$registro->fecha."', '".$registro->comentario."')";
        $this->genericoDAO->Abrir();
        $retorno = $this->genericoDAO->InsertUpdateDelete($query);
        $this->genericoDAO->Cerrar();
      }
      return $retorno;
    }
    #Fin public function addRegistroHrs

    public function addRegistroMrs($mascotas)
    {
      $retorno = FALSE;
      if (!is_null($mascotas))
      {
        # code...
        $query ="insert into registro(microchip, nombre, raza, sexo, especie, color, fecha) ";
        $query = $query."values('".$mascotas->microchip."','".$mascotas->nombre."',".$mascotas->raza.", '".$mascotas->sexo."', '".$mascotas->especie."', '".$mascotas->color."', '".$mascotas->fecha."')";
        $this->genericoDAO->Abrir();
        $retorno = $this->genericoDAO->InsertUpdateDelete($query);
        $this->genericoDAO->Cerrar();
      }
      return $retorno;
    }
    #Fin public function addRegistroMas
  }

