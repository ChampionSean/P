<?php
/**
 *Main class
 */
 include 'Usuario.php';
 include 'DataBase.php';

 $myBase = new DataBase("colonelsupercof1", "PoloCaseDB");



function Register2($base){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $passw = $_POST['pass'];
  $soncof = $base->addElement2($nombre, $apellido, $passw);
  return $soncof;


}

 function Register($Base){
   $tipo = $_POST['group1'];
   $nombre = $_POST['nombre'];
   $passw = $_POST['nombre'];
   $email = $_POST['mail'];
   $tipo_numero = $_POST['group2'];
   $telefono = $_POST['telefo'];
   $direccion = $_POST['dire'];
   $rfc = $_POST['rfc'];
   $neo_User = new Usuario($tipo, $nombre, $passw, $email, $tipo_numero, $telefono, $direccion, $rfc);
   $soncof = $Base->addElement($neo_User);

   return $soncof;
 }

function login(){
$nombre = $_POST['nombre'];
$passw = $_POST['pass'];
if(($nombre !="") && ($passw != "")){
}

}

if(($_SERVER['HTTP_REFERER']) == ("http://localhost/PoloCase/Form.html")){

if(Register($myBase)){
   header('Location: Succerfull.html');
}

}else{
  if(Register2($myBase)){
    header('Location: SuccerfullAdm.php');
  }

}

 ?>
