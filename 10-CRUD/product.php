<?php require('conexion.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $statement = $conexion->prepare("SELECT * FROM `cursos` WHERE id = '$id'");
    $statement->execute();
    $result = $statement->fetch();

}else{
    echo"no funciono";
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col6">
                <img src="w-100" src="<?php echo $result['imagen'];?>" alt="">
            </div>
            <div class="col6">
                <h1><?php echo $result['curso'];?></h1>
                <p><?php echo $result['descripcion'];?></p>
                <p>Estudiantes: <?php echo $result['estudiantes'];?></p>
                <a href="./index.php"><button class="btn">Volver a Inicio</button></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>