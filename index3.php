<!DOCTYPE html>
<html>
<head>
	<title style="font-family: verdana;"></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="shortcut icon" type="image/x-icon" href="icono.ico" />
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<div class="container">
  <h1 class="heading">Decimal a Binario Conversion</h1>
  <input type="number" id="input" placeholder="Numero.." min='0' name="numero"/>
  <br>
  <input type="submit" name="submit" value="enviar"/>
</form>
  <?php

if(isset($_POST["submit"])){
	$numero=$_POST["numero"];
	echo "<br>";

	echo decbin($numero);
	
}
?>



     
      
     
  	
</body>
</html>