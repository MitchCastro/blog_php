<?php //validacion de los usuario y contraseñas
 if (isset($_GET['error'])) {
 	$error = $_GET['error'];

 	switch ($error) {
 		case '1';
 			echo "el usuario no existe ";
 			break;
 		
 		case '2';
 			echo "la contraseña es incorrecta";
 			break;
 	}
 }





 ?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>loggin</title>
   <script>
   		function validar(form){
   			if (form.usuario.value==null) {
   				alert("debe escribir su nombre de usuario");
   				form.usuario.focus();
   			    return;
   		    }
   		    if(form.pasword.value==""){
   		    	alert("debe de escribir su contraseña");
   		    	form.pass.focus();
   		    	return;
   		    }
   		    var str= form.password.value;
   		    if (str.length<6) {
   		    	alert("debe de introducir mas de 6 caracteres");
   		    	form.pass.focus();
   		    	return;
   		    }
   		    form.submit();
   		}
   </script>
   <link rel="stylesheet" href="">
</head>
<body>

<form method="POST" action="validad.php">
      <label>Nombre de usuario: </label><input type="text" name="usuario" id="usuario"><br/><br/>
      <label>Contrasena: </label><input type="password" name="password" id="password"><br/><br/>
      <input type="submit" name="iniciar" value="iniciar" onclick="validar(this.form)"/>
    </form>
   
</body>
</html>