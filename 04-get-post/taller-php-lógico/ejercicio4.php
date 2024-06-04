<?php

if (isset($_POST['metrosEstucar'])){
    $cantidadMetros = $_POST['metrosEstucar'];
} else {
    $cantidadMetros = null;
};
if (isset($_POST['tipoSuperficie'])){
    $textura = $_POST['tipoSuperficie'];
} else {
    $textura = null;
};
switch($textura){
    case "lisa":
    $costoTrabajo = $cantidadMetros *= 2000;
    break;
    case "noLisa":
    $costoTrabajo = $cantidadMetros *= 4000;
    break;
    default:
    $costoTrabajo = null;
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./ejercicio4.php" method="post">
        <label for="metrosEstucar">a continuacion escribe los metros cuadrados</label>
        <input type="numbers" name="metrosEstucar">
        <br>
        <label for="tipoSuperficie">tipo de superficie = lisa</label>
        <input type="radio" name="tipoSuperficie" value="lisa">
        <br>
        <label for="tipoSuperficie">tipo de superficie = NO lisa</label>
        <input type="radio" name="tipoSuperficie" value="noLisa">
        <br>
        <input type="submit">
    </form>
    <h1>
        EL CLIENTE DEBE PAGAR <?php echo $costoTrabajo ?> PESOS
    </h1>
    <h4>
        + 15.000 pesos de trasporte 😅
    </h4>
</body>
</html>