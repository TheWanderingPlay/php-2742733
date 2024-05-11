<?php
echo "<h2>Ejercicio 1</h2> <br>";
$cantidadDeArticulos = 10 ;
if($cantidadDeArticulos <= 12)
{echo "Caja Rápida <br> <br>";}
else {echo "CAJA NORMAL <br> <br>";}

$edadPaVotar = 10 ;
if($edadPaVotar >= 18)
{echo "SÍ";}
else {echo "NO";}

echo "<h2>Ejercicio 2 <br></h2>";
$edadDiscoteca = 11;
$nombreDiscoteca = "mario";

if($edadDiscoteca >= 18)
{echo "PUEDE INGRESAR A LA DISCOTECA";}
else if($edadDiscoteca <= 17)
{echo "no puede ingresar a la discoteca";}
else if($nombreDiscoteca === "mario" or "carlos")
{echo "Puede Ingresar";}

echo "<h2>Ejercicio 3 <br></h2>";
$estatura = 190;
$velocidad = 29;
$edadParticipante = 40; 

$asignaciónParticipante = null;


if($estatura >= 170 && $velocidad >= 27)
{echo "INGRESO ADMITIDO <br>";
if($edadParticipante >= 18)
{echo "DIVISIONES MAYORES";}
else {echo "divisiones menores";}
}
else {echo "ingreso negado";}


echo "<h2>Ejercicio 4 <br></h2>";

$colorAire = "perejil";
$calidadAire = "la calidad del aire es"; 

switch ($colorAire)
{
case "verde":
    echo "$calidadAire buena";
break;
case "amarillo":
    echo"$calidadAire moderada";
break;
case "naranja":
    echo "$calidadAire saludable para grupos sensibles";
break;
case "rojo":
    echo"$calidadAire saludable";
break;
case "purpura":
    echo"$calidadAire muy poco saludable";
break;
case "marron":
    echo"$calidadAire peligrosa";
break;
default:
    echo "color no válido";
}
/* else {echo "color no válido";} */
?>