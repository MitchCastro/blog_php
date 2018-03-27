<?php 
session_start();
 echo "bienvenido"//. $_SESSION['userreg'];

 if(isset($_POST)['userreg'])){
 	session_start();
 	session_destroy();

 		header('location: index.php');
 }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>logged in</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<form method="POST" name="logout">
 		<input type="submit" name="logout" value="cerrar sesion">
 	</form>
 	
 </body>
 </html>



 <?php 
/*   include_once('conexion.php');

class user{
   private $db;

   public function _construct(){
      $this->db = new connection();
      $this->db = $this->$conexion;
   }
   publc function login ($name, $pass){
      if(!empty($name)&& !empty($pass)){
         $st = $this->db->prepare("SELECT * FROM usuario WHERE nombreusuario=? and password=?");
         $st->bindparam(1,$name);
         $st->bindparam(2,$pass);
         $st->execute();

         if($st->rowcount()==1){
            echo "hola"
         }else{
            echo "incorrecto"
         }

      }else{
         echo "introduce usuario y contraseña"
      }

   }
}

 ?> */