<?php

if (isset($_POST['numeroHoras'])) {
    $cantidadHoras = $_POST['numeroHoras'];
} else {
    $cantidadHoras = null;
};

if (isset($_POST['valorHoras'])) {
    $unidadHoras = $_POST['valorHoras'];
} else {
    $unidadHoras = null;
};

/* calculo de valor */
$totalHoras = $unidadHoras * $cantidadHoras;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUANTO GANASTE?? 😊</title>
</head>

<body>
    <form action="./ejercicio2.php" method="post">
        <label for="numeroHoras">¿cuantas horas trabajaste al mes?</label>
        <input type="number" placeholder="1234567" min="0" max="9999999999" name="numeroHoras">
        <br>
        <label for="valorHoras">Escribe el valor de la hora</label>
        <input type="number" placeholder="1234567" min="0" max="9999999999" name="valorHoras">
        <br>
        <input type="submit">
    </form>
    <h1>
        <!--no entiendo porque el $totalHoras no cambia maldición -->
        ¡¡GANASTE <?php echo "$totalHoras" ?> PESOS, DOLARES O LO QUE SEA <br>
    </h1>
    <h3>
        <?php
        if ($totalHoras >= 2200000) {
            echo 'pero tienes que pagar impuestos guap@';
        }else {echo "(...)";};
        ?>
    </h3>
</body>

</html>