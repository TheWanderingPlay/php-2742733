<?php require('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    //Para verificar que se envíen todos los datos
    if (empty($usuario) or empty($password)) {
        echo '<div class="alert alert-light" role="alert">Rellene el formulario</div>';
    } else {
        $statement = $conexion->prepare("SELECT * FROM `usersapp` WHERE username = :user AND contraseña = :pass");
        $statement->execute(array(':user' => $usuario, ':pass' => $password));
        $result = $statement->fetch();

        if ($result) {
            echo 'true';
            $_SESSION['userRegister'] = $usuario;
            $_SESSION['passRegister'] = $password;
            header('Location: curso.php');
        } else {
            echo 'false';
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="contenedoR">
        <div class="espacioIngresar">
            <h1 class="titulo">
                Iniciar Sesion
            </h1>
            <br>
            <br>
            <form action=" " method="POST" class="tamañoForm">
                <div class="mb-3">
                    <label for="user" class="form-label tamañoLetra">Nombre de Usuario</label>
                    <input type="text" class="form-control tamañoEspacio" placeholder="user" name="user" require>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label tamañoLetra">Contraseña</label>
                    <input class="form-control tamañoEspacio" type="password" placeholder="Password" name="password">
                </div>

                <div class="mb-3">
                <a href="./registro.php" class="text-decoration-none">¿No estas registrado? <span class="text-decoration-underline fs-4"><b>¡Registrate aquí!</b></span></a>
                </div>

                    <button type="submit" class="btn btn-primary fs-4 botonIniciar">Iniciar sesión</button>
            </form>
        </div>
        <div class="Imagen">
                <h1>aqui va la imagen</h1>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>