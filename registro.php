<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label>Nombre de usuario: </label><input type="text" name="userreg"><br/><br/>
        <label>Contrasena: </label><input type="password" name="pwreg"><br/><br/>
        <label>Correo:</label><input type="text" name="correg"><br><br>
        <input type="submit" name="registrar" value="Registrarme">
    </form>
</body>
</html>
	<?php
    session_start();

        include("conexion.php");

        if(isset($_POST['registrar']))
        {
        	if($_POST['userreg'] == '' or $_POST['pwreg'] == '' or $_POST['correg'] == '')
    {
        echo "Debe llenar todos los campos por favor.";
    }else{
        
             $sql = 'SELECT * FROM usuario';
             $rec = mysqli_query($conexion,$sql);
             $verificar = 0;
        
             while($resultado = mysqli_fetch_object($rec))
             {
                 if($resultado->nombreusuario == $_POST['userreg'])
                 {
                     $verificar = 1;
                 }
             }
             if($verificar == 0)
             {
                         $nom = $_POST['userreg'];
                         $pw = $_POST['pwreg'];
                         $cr = $_POST['correg'];
                         $conexion->query("INSERT INTO usuario (nombreusuario,password,email) VALUES ('$nom','$pw','$cr')");
                         mysqli_query($conexion,$sql);
                 
                 
                         echo "Te has registrado con exito. <a href='index.php'>volver</a>" ;
                         header('location: index.php');
             }else{
                  echo "El nombre de usuario ya esta en nuestra base de datos, por favor prueba otro.";
              }
        }
        }
	?>