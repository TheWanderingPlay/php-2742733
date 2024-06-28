<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirm = $_POST['confirm'];

    if (empty($usuario) or empty($password) or $password !== $confirm) {
        echo '<div class="mensaje">
                <h5>Usuario o Contraseña incorrectos</h5>
            </div>';
    } else {
        try {
            $conexion = new PDO('mysql: host=localhost; dbname=focaapp', 'root', '');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("INSERT INTO `usersapp`(`ID`, `username`, `correo`, `contraseña`) 
        VALUES (NULL, :username , :email, :pass)");

        $statement->execute(array(":username" => $usuario, ":email" => $email, ":pass" => $password));

        $statement = $statement->fetchAll();

        header('location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>     
                <h1>REGISTRARSE</h1>
                <form action="registro.php" method="POST" class="formulario">
                    <input type="username" placeholder="nombre de usuario" name="username" require>
                    <input type="email"  placeholder="correo" name="email" require>
                    <input type="password"  placeholder="contraseña" name="password" require>
                    <input type="password"  placeholder="confirmar contraseña" name="confirm" require>
                    <button type="submit" class="boton">Registro</button>
                </form>
</body>

</html>