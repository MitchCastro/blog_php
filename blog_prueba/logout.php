<?php 
session_start();


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>CERRAR SESION</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>


<!--<th><a href="index.php">volver</a></th>-->
	
 </body>
 </html>
 <?php 


session_destroy();
echo "<script> window.location='index.php' </script>";  ?>