<?php 
session_start();


   if(isset($_SESSION['nombreusuario'])){
    echo "<h3>Bienvenido".$_SESSION['nombreusuario'];
  }
  else{
    echo "<h3>Bienvenido</h3>";
  }
    ?>
  </center>
<!-- <?php if(!isset($_SESSION['nombreusuario'])) { ?>
  
  <?php } else { ?>
  <a href="publicaciones.php">Agregar nueva publicación</a>
  <a href="perfil.php">Perfil</a>
  <a href="logout.php">Cerrar sesion</a>
  <?php } ?>
   <br><br>-->



 
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
   <!-- <h6>bienvenido <?php echo $nombre; ?></h6>-->
    <header class="">
        <div class="wrapper">
            
<div class="logo"> MITCH CASTRO </div>
<NAV>
        <?php 
        if (!isset($_SESSION['nombreusuario'])) {          ?>

    <a href="index.php">    INICIO</a>
    <a href="registro.php">    REGISTRO</a>
    <a href="loggin.php">    LOGIN</a>
    <?php } else { ?>
        <a href="publicaciones.php">Agregar nueva publicación</a>
        <a href="perfil.php">Perfil</a>
        <a href="logout.php">Cerrar sesion</a> 
        
        <?php }  ?>
</NAV>
    </div>
    </header>
    <div class="float">
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
          //$cat=tabla("publicaciones", $conexion);
          foreach ($pubs as $pub) {
              echo '<h2>'.$pub['titulo'].'</h2>';
              echo "<br>";
              echo '<h5>'.$pub['categoria_id'].'</h5>';
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
      <section  style="border: 3px solid black;" class="float">
        <h5>CATEGORIAS</h5>
        <?php
                  $pubs=tabla("categoria",$conexion);

        foreach ($pubs as $pub) {
          echo '<a  href="publicaciones.php">'.$pub['categoria'].'</a> <br> <br>';
                       
        } 
        ?>

       <!-- <?php 
        if (!isset($_SESSION['nombreusuario'])) {          ?>
        <a href="publicaciones.php">Agregar nueva publicación</a>

        <?php }else{ ?>
        <a href="publicaciones.php">Agregar nueva publicación</a>
        <a href="perfil.php">Perfil</a>
        <a href="logout.php">Cerrar sesion</a> 
        
        <?php }  ?>-->
          
        </section>
    </div>
        
         
        
        
        

   

</body>
</html>