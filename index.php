<?php 
session_start();
$nombre=$_SESSION['nombreusuario'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN Y REGISTRO</title>
    <link rel="stylesheet" href="css/estilos.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="header.js"></script>
</head>
<body>
    <h6>bienvenido <?php echo $nombre; ?></h6>
    <header class="">
        <div class="wrapper">
            
<div class="logo"> MITCH CASTRO </div>
<NAV>
    
    <a href="index.php">    INICIO</a>
    <a href="#">    CONTACTO</a>
    <a href="registro.php">    REGISTRO</a>
    <a href="loggin.php">    LOGIN</a>
</NAV>
    </div>
    </header>
    <section class="contenido wrapper">
        <?php 
        //desmadre para hacer las publicaciones
        include("conexion.php");
         function tabla($tabla,$conexion)
     {
        $query = $conexion->prepare("select * from $tabla");
        $query->execute();
        return $query;
     }
        $pubs=tabla("publicaciones",$conexion);
        foreach ($pubs as $pub) {
            echo $pub['titulo'];
            echo "<br>";
            echo "<br>";
            echo $pub['descripcion'];
            echo "<br>";
            echo "<br>";
            echo $pub['autor'];
            echo "<br>";
            echo "<br>";// aqui terminar el desmadre de las publicaciones XDDDD
        }

         ?>
               
    </section>   


   

</body>
</html>