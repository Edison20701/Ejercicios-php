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
  <h1 class="heading">Factorizacion</h1>
  <input type="number" id="input" placeholder="Numero.." min='0' name="numero" required />
  <br>
  <input type="submit" name="submit" value="enviar"/>
</form>
  <?php

if(isset($_POST["submit"])){
	
 	
	$num=$_POST["numero"];

	$factorizar=1;

	for ($i=1; $i<$num + 1 ; $i++) { 

	$factorizar=$factorizar*$i;
	
	
	}
echo "<br>";
	echo "$factorizar";

	
}
?>



     
      
     
  	
</body>
</html>