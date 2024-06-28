<?php 
require('conexion.php')
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
    <section id="navbar">
        <nav class="BARRA position-fixed navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">I.E Alabadores De Petro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#animate">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#cursos">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#carrusel">Inspírate a Crear</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#hacemos">Que hacemos?</a>
                        </li>
                    </ul>
                    <a href="./Inicio.php">
                        <button class="btn btn-outline-success">Iniciar Sesion</button>
                    </a>

                </div>
            </div>
        </nav>
        <div class="espacio" style="height: 3.5rem; margin: 0;">
        </div>
    </section>

    <section id="animate" class="py-2">
        <div class="imagenAnimate">
        </div>
    </section>

    <section id="cursos" class="py-2" style="background-color: white">
        <div class="container">
            <div class="container text-center">
                <div class="row align-items-center justify-content-around">
                    <?php
                    $statement = $conexion->prepare("SELECT * FROM `cursos`");
                    $statement->execute();
                    $result = $statement->fetchAll();

                    foreach ($result as $item) {
                    ?>
                        <div class="col-3">
                            <a style="text-decoration: none;" href="product.php?id=<?php echo $item['id'];?>">
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo $item['imagen'];?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $item['curso'];?></h5>
                                        <p class="card-text"><?php echo $item['descripcion'];?></p>
                                        <div>
                                            <i class="ni bi-people-fill me-2"></i><span><?php echo $item['estudiantes'];?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    };
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="carrusel" class="py-2">
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" style="margin-bottom: 30px;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Multimedia/tu.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./Multimedia/santafe2.avif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/chican3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="hacemos" class="py-2">
        <div class="container text-center my-5 py-2" style="background-color: white;">
            <div class="row justify-content-around">
                <div class="col">

                    <h1>CONTENIDO</h1>
                    <p class="text-start">
                        <b>
                            en esta pagina encontraras cursos para <br>
                        </b>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis libero officia molestias ullam nesciunt magni cupiditate alias consequuntur voluptate architecto quis laudantium quidem, nemo et sequi aliquam. Ipsa, cum perferendis?
                    <p>
                </div>
                <div class="col" style="padding: 20px;">
                    <img src="./Multimedia/mina.jpg" alt="">
                </div>
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>