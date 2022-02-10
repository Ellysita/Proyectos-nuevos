<html>
 <head>
  <title>
Palindromo
  </title>
 </head>
<body>

<form id="miform" name="miform" method="post" action="Palindromo1.php">
   <center>
      <font size= "6" color ="blue"> <b><i>
         Escriba Una Palabra
      </i></b></font>
      <br>
   <input type="text" value="" name="palabra">
      <br><br>
   <input type="submit" value="Analizar Cadena" name="analizar">
   </center>
   </form>


 <?php

 if(isset($_POST['analizar']))
 {
$cadena= $_POST['palabra'];
$long_cadena =strlen($cadena);

$i=1;
$cad2='';
while ($i<=$long_cadena)
{
$desc=($long_cadena)-$i;
$cad=substr($cadena,$desc,1);
$cad2=$cad2.$cad;
$i++;
}

if ($cadena==$cad2)
{

   echo "La Palabra Es Palindromo";
echo"<br>";
   echo $cadena ," es igual a ", $cad2;

}
else
{
   echo "La Palabra No Es Palindromo";

echo "<br>";

   echo $cadena ," no es igual a ", $cad2;
}

}
   ?>


