<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="shortcut icon" type="image/x-icon" href="icon" />
</head>
<body>
	
<header style="margin-right: -150px; color: white;"><?php 

	$nombre=$_POST['nombre'];
	echo "<br>";
	echo "Bienvenido señor: $nombre";

	?>
</header>	
<div>
<section class='galeria'>
  <input type="radio" id="uno" value="1" name="tractor" checked='checked' />    
<input type="radio" id="dole" value="2" name="tractor" />      
<input type="radio" id="tele" value="3" name="tractor" />
  <article class='card una' >
   
      <p>El sistema binario.<br/>
​ es un sistema de numeración que <br/>
se representan utilizando<br/>
 cero y uno (0 y 1).</p>
 <h2 class='entypo-tag'><a href="index3.php">Decimal a binario</a></h2> 
    <label for='dole' class='entypo-left-bold otra'></label>
    <label for='tele' class='entypo-right-bold otra'></label>
    <label for='uno' class='entypo-arrows-ccw afin'></label>  
    

  </article>
  
  <article class='card dos'>
    
      <p> función factoria <br/>
lo que significa "el factorial de cualquier número es:<br/>
 10! = 10 × 9!, o incluso 125! = 125 × 124!<br/>
</p>
<h2 class='entypo-feather'><a href="index4.php">Factorial</a></h2>
    <label for='tele' class='entypo-left-bold otra'></label>
    <label for='uno' class='entypo-right-bold otra'></label>
    <label for='dole' class='entypo-arrows-ccw afin'></label>  
  </article>
  
  <article class='card tres'>
   
      <p>En matemáticas, la sucesión o serie de Fibonacci hace referencia <br/>
      a la secuencia ordenada de números descrita por Leonardo de <br/>
      Pisa, matemático italiano del siglo XIII: 0, 1, 1, 2, 3, 5, 8, 13, 21<br/></p>
      <h2 class='entypo-address'><a href="index5.php">Sucesión de Fibonacci</a></h2>
    <label for='uno' class='entypo-left-bold otra'></label>
    <label for='dole' class='entypo-right-bold otra'></label>
    <label for='tele' class='entypo-arrows-ccw afin'></label>  
  </article>
</section>
</div>

</body></footer>
</html>