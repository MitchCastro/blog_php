<?php 
session_start();

if (isset($_POST['usuario']) and isset($_POST['password'])){
include("conexion.php");
$con = $conexion->prepare('SELECT * FROM usuario WHERE nombreusuario = :us and password = :pass');

//bind 
    $con->bindparam(':us', $us);
    $con->bindparam(':pass', $pass);
 
    //execute 
    $us= $_POST['usuario'];
    $pass= $_POST['password'];
    $con->execute();

$reg  = $con->fetch();  

  if ($pass == $reg['password']) {
   $_SESSION['nombreusuario'] = $reg['nombreusuario'];
   $_SESSION['id'] = $reg['id'];
   $_SESSION['tipo'] = $reg['tipo'];
   header("location:index.php");

  } else {
     header("location:loggin.php?error=2");
  }
  } else {
   header("location:loggin.php?error=1");

}
 ?>