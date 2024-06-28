<?php 
require ('conexion.php');
session_unset();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];
    $confirm = $_POST['confirmation'];

    
    //Para verificar que se envíen todos los datos
    if (empty($usuario) or empty($password) or empty($correo) or empty($confirm) or $password !== $confirm) {
        echo 'Rellene completo el formulario o escriba todo correctamente (sobre todo la confirmación)';
    } else {
        $statement = $conexion->prepare("INSERT INTO `usersapp` (`id`, `username`, `correo`,`contraseña`) VALUES (NULL, :user, :correo, :pass) ");
        
        $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
            //ejecutar el statement
            $statement->execute(array(':user' => $usuario, ':correo' => $correo, ':pass' => $password));
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
    <h1>Registrate</h1>

    <form action="" method="POST">
        <label for="user">User</label>
        <input type="text" placeholder="User" name="user">
        <label for="correo">Correo</label>
        <input type="email" placeholder="Correo" name="correo">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
        <label for="confirmation">Confirmar contraseña</label>
        <input type="password" placeholder="confirmation" name="confirmation">
        <button type="submit">Registrarse</button>
    </form>

    <?php if (isset($_SESSION['userRegister'])) : ?>
        <p>Datos registrados, ya puedes iniciar sesión</p>
        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'];  ?> </p>
        <a href="./Inicio.php">Iniciar sesión</a>
    <?php endif ?>

</body>

</html>