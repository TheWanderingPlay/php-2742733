<?php 

if (isset($_POST['n1'])){
    $valor1 = $_POST['n1'];
} else {
    $valor1 = 0;
}

if (isset($_POST['n2'])){
    $valor2 = $_POST['n2'];
} else {
    $valor2 = 0;
}

if (isset($_POST['n3'])){
    $valor3 = $_POST['n3'];
} else {
    $valor3 = 0;
}
echo "los formularios vacios son iguales a CERO (0)";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title># MAS GRANDE</title>
</head>
<body>
    <form action="./ejercicio3.php" method="post" style="font-size: x-large;">
        <label for="n1">deposita un numero</label>
        <input type="number" name="n1">
        <br>
        <label for="n2">deposita un numero</label>
        <input type="number" name="n2">
        <br>
        <label for="n3">deposita un numero</label>
        <input type="number" name="n3">
        <br>
        <input type="submit">
    </form>
    <h1>
        EL NUMERO MAS GRANDE ES... <br>
        <?php
        // voy a hacer un if que compare valor 1 con 2 o 3, si es mayor, el echo será 1, pero si no, adentro de ese hará una comparación 
        if ($valor1 >= $valor2 or $valor3){
            if($valor1 === 0){
               echo ""; 
            } else {
                echo "$valor1";
            }
        } else {
            if($valor2 >= $valor3){
                echo "$valor2";
            } else {
                echo "$valor3";
            };
        }
        ?>
    </h1>
</body>
</html>