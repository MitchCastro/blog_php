<?php 
 $host = "localhost";
 $hostuser = "root";
 $hostpw = "";
 $hostdb = "mi_blog";

 $conexion = mysqli_connect($host,$hostuser,$hostpw,$hostdb);

 if($conexion){
 	return "conectado";
 }else{
 	return"no conectado";
 }


 ?>