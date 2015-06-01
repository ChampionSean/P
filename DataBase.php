<?php
/**
 *Clase controlodora de la
 * base de datos (cliente)
 */
class DataBase{
  private $connect;

  function __construct($password, $database)
  {
    $this->connect = mysqli_connect("localhost", "root", $password, $database);
    # code...
  }


function getConnection(){
  return $this->connect;
}


  function closeDataBase(){
    mysqli_close($this->connect);
    }

    function addElement($element){
     $tipo = $element->getTipoUser();
     $nombre = $element->getNombre();
     $pass = $element->getPass();
     $mail = $element->getEmail();
     $tipoTel = $element->getTipoTele();
     $tele = $element->getTelefono();
     $direccion = $element->getDireccion();
     $rfc = $element->getRfc();
     return mysqli_query($this->connect,"INSERT INTO Clientes (tipo, nombre, password, email, tipTel, telefono, direccion, rfc) VALUES ('".$tipo."', '".$nombre."','".$pass."', '".$mail."', '".$tipoTel."', '".$tele."', '".$direccion."', '".$rfc."')");

    }

    function addElement2($nombre, $apellido, $pass){
      return mysqli_query($this->connect, "INSERT INTO Administradores (nombre, apellido, password) VALUES ('".$nombre."', '".$apellido."','".$pass."')");
    }
    function eraseElementByName($name){
    mysqli_query($this->connect, "DELETE FROM Clientes WHERE nombre='".$name."'");
    }


    function updateElement($element, $nam){
      $tipo = $element->getTipoUser();
      $nombre = $element->getNombre();
      $pass = $element->getPass();
      $mail = $element->getEmail();
      $tele = $element->getTelefono();
      $direccion = $element->getDireccion();
      $rfc = $element->getRfc();
    mysqli_query($this->connect, "UPDATE Clientes SET tipo='".$tipo."', nombre='".$nombre."', password='".$pass."', email='".$mail."', telefono='".$tele."', direccion='".$direccion."', rfc='".$rfc."' WHERE nombre='".$nam."'");
    }


//array arrayassoc
    function Log($name, $pass, $table){
  $array = mysqli_query($this->connect, "SELECT * FROM ".$table." WHERE nombre = '".$name."' AND password = '".$pass."'");
  if($array == true){
  $arrayassoc = mysqli_fetch_array($array, MYSQLI_ASSOC);
	return $arrayassoc;
}else{
  return false;
}
    }


    function findElementName($field, $table, $val){
    $user = mysqli_query($this->connect, "SELECT * FROM ".$table." Where ".$field."='".$val."'");
    if($user == true){
    $arrayassoc = mysqli_fetch_array($user, MYSQLI_ASSOC);
  	return $arrayassoc;
  }else{
    return false;
  }
    }


    function findElemets($column, $value){
    $users = mysqli_query($this->connect, "SELECT * FROM Clientes WHERE ".$column."='".$value."'");
    $ar = mysqli_fetch_array($users,  MYSQLI_ASSOC);
    return $ar;
    }


    function AllUsers($table){
    $arra = mysqli_query($this->connect, "SELECT * FROM Clientes");
    $arr = mysqli_fetch_($arra, MYSQLI_ASSOC);
    return $arr;
    }


}



 ?>
