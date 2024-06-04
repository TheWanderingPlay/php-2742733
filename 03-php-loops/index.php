<?php
$numero = 1;
while ($numero <= 27){    
    if ($numero == 10)
    {echo "VOY A OMITIR ESTE NUMERO <br>";}
    else { 
      if($numero == 27){echo "INTERRUMPO EL CONTEO"; break;}
      else{echo "abecedario tiene $numero letras <br>";}
    }
    $numero++;
}

echo "<br> <br>";


for ($algo = 1; $algo <= 5; $algo++) {
  if ($algo == 4) echo "me salté este numero // ";
  if ($algo == 4) continue;
  echo "soy el numero $algo // ";
  }

echo "<br> <br>";

$colorManzana = array ("Roja", "Verde", "Amarilla", "Azul",);
$colorMaligno1 = "Amarilla";
$colorMaligno2 = "Azul";


foreach ($colorManzana as $BuenoMalo){
    echo "//$BuenoMalo";
    if ($BuenoMalo === $colorMaligno1) 
    {echo "--Esta infectado--";};
    if($BuenoMalo === $colorMaligno2)
      {echo "--Esta infectado--";};
    echo "// <br>";
  }
?>