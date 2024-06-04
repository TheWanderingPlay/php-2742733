<!-- voy a estudiar como funcionan las funciones pues me parecen muy importantes, ya que 
w3school dice 
        El verdadero poder de PHP proviene de sus funciones.

        PHP tiene más de 1000 funciones integradas y, además, puedes crear tus propias funciones personalizadas.
el profe no explico mucho eso, pero bueno... -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salamalecum</title>
</head>

<body>
    <h1>PRUEBA STUPEFACIENTES</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="nombrePersona"></label>
        <input type="text" name="nombrePersona">
        <br>
        <br>
        <label for="tipoColor">color de prueba amarillo</label>
        <input type="radio" name="tipoColor" value="negativo">
        <br>
        <label for="tipoColor">color de prueba rojo</label>
        <input type="radio" name="tipoColor" value="negativo">
        <br>
        <label for="tipoColor">color de prueba azul</label>
        <input type="radio" name="tipoColor" value="positivo">
        <br>
        <input type="submit">
    </form>
</body>

</html>
<?php

function arrestado($nombre, $resultado){
    echo "<h1>la pertenencia de $nombre dio $resultado para cocaína</h1>";
    };

arrestado(  (isset($_POST['nombrePersona']) ? $_POST['nombrePersona'] : null),
            (isset($_POST['tipoColor']) ? $_POST['tipoColor'] : null))
?>