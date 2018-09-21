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
  <h1 class="heading">Fibonacci</h1>
  <input type="number" id="input" placeholder="numero.." min='0' name="numero" required />
  <br>
  <input type="submit" name="submit" value="enviar"/>
</form>
  <?php

if(isset($_POST["submit"])){
	
 	$a=0;
 	$b=1;
 	$c=0;
 	
	$num=$_POST["numero"];

	

	for ($i=0; $i<$num  ; $i++) { 

	$a=$b;
	$b=$c;
	$c=$a+$b;
	echo "$c";
	echo "<br>";

	
	
	}


	
}
?>



     
      
     
  	
</body>
</html>