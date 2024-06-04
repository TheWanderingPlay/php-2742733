<?php 
if (isset($_GET['cantidadAños'])){
 $yearsOld = $_GET['cantidadAños'];   
} else {
    $yearsOld = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEPITO ES MAYOR DE EDAD? 🤔</title>
</head>
<body>
    <h3>
        PEPITO PEREZ TIENE <br>
    </h3>
    <form action="./ejercicio1.php" method="get" style="font-size: medium;">
        <label for="cantidadAños">Escriba su edad</label>
        <input type="numbers" min="1" max="120" placeholder="1-120" name="cantidadAños">
    </form>
    <h5>
        Pepito <?php 
        if (isset($_GET['cantidadAños'])){
            if ($yearsOld <= 17){
                echo "NO es mayor de edad";
            } else {
                echo "ES mayor de edad";
            };
        } else {
            echo "(-esperando-respuesta-)";
        }
        ;
        ?>
    </h5>
</body>
</html>
