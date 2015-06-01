<?php
/**
 *
 */
 include 'Usuario.php';
class Administrador extends Usuario
{
  private $apellido = "";

  function __construct($nombre, $ape, $password)
  {
    $this->setNombre($nombre);
    $this->apellido = $ape;
    $this->setPassword($password);
    # code...
  }

  function setApellido($ap){
    $this->apellido = $apa;
  }

  function getApellido(){
    retunr $this->apellido;
  }


}

/**
 *

?>
