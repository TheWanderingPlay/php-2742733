<?php

/* $texto = $_POST['textoEscrito']; */
if (isset($_POST['textoEscrito'])) {
    $texto = $_POST['textoEscrito'];
}else {
    $texto = "Palabra Prueba";
};

/* lo siguiente es el tamaño de la letra */

$tamaño = null;

if (isset($_POST['cambiarTamaño'])) {
    $tamaño = $_POST['cambiarTamaño'];
} else {
    $tamaño = 1;
};

/* cambiar a modo oscuro*/
/* $oscuro = null;

if (isset($_GET['modoOscuro'])) {
    $oscuro = $_GET['modoOscuro'];
} else {
    $oscuro = "";
}; */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GET & POST</title>
    <style>
        .black {
            background-color: black;
            color: yellow;
        }
    </style>
</head>

<body>
    <br>
    <!--     <a href="./indexPersonalDePrueba?modoOscuro=black">CAMBIAR COLOR</a> -->
    <form action="./indexPersonalDePrueba" method="post">
        <label for="cambiarTamaño">cambia el tamaño con numeros:</label>
        <input type="number" min="1" max="6" placeholder="1-6" name="cambiarTamaño">
        <br>

        <label for="textoEscrito">dale un tamaño</label>
        <input type="text" placeholder="ej: pepito" name="textoEscrito">
        <br>

        <input type="submit">
    </form>
    <hr><!-- class="< ?php echo "$oscuro" ?>" -->
    <p style="font-size: <?php echo "$tamaño"; ?>rem;">
        <?php echo "$texto" ?>
    </p>
</body>

</html>