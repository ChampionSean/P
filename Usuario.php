<?php
/**
 *
 */
class Usuario
{
  private $ser ="";
  private $nombre ="";
  private $password ="";
  private $email ="";
  private $tipoTele = "";
  private $telefono ="";
  private $direccion ="";
  private $RFC ="";
  

 function __construct($persona, $nombre, $password, $email, $tipoTel, $telefono, $direccion, $rfc)
  {
    $this->ser = $persona;
    $this->nombre = $nombre;
    $this->password =$password;
    $this->email = $email;
    $this->tipoTele = $tipoTel;
    $this->telefono = $telefono;
    $this->direccion = $direccion;
    $this->RFC = $rfc;
    # code...
  }

  function setTipoTele($g){
    $this->tipoTele = $g;
  }

  function getTipoTele(){
    return $this->tipoTele;
  }

  function getTipoUser(){
  return $this->ser;

  }


  function getNombre(){
    return $this->nombre;
  }


  function getPass(){
    return $this->password;
  }

  function getEmail(){
    return $this->email;
  }

  function getTelefono(){
    return $this->telefono;
  }

  function getDireccion(){
    return $this->direccion;
  }

  function getRfc(){
    return $this->RFC;
  }

  function setTipoUser($a){
    $this->nombre=$a;
  }

  function setNombre($a){
    $this->nombre=$a;
  }

  function setPassword($a){
    $this->password=$a;
  }

  function setEmail($a){
    $this->email =$a;
    }

  function setTelefono($a){
      $this->telefono = $a;

    }

  function setDireccion($a){
      $this->direccion = $a;
    }

  function setRfc($a){
      $this->RFC = $a;
    }

}

 ?>
