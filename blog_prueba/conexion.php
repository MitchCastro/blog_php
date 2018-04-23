<?php
$host = 'localhost';
$dbname = 'mi_blog';
$user = 'root';
$password = '';
define('RUTA', 'http://localhost/phpramos/blog_prueba');

try{
//MYSQL Con PDO//
$conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$password);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
echo $e->getMessage();
}

?>