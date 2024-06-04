<?php session_start();

#1. Crear una base de datos que se llame 'focaapp' y una tabla que se llame 'usersapp'
#2. Columnas: ID,username, correo, contraseña
#3. en registro.php conectar con base de datos y hacer un ISERT INTO en la tabla 'usersapp' cuando le den click en registrarse

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];

    //Para verificar que se envíen todos los datos
    if (empty($usuario) or empty($password)) {
        echo 'Rellene completo el formulario';
    } else {
        //echo $usuario . ' - ' . $password;
        $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
        //echo ' - varibales de sesión guardadas 😎';
        //header('Location: index.php');

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

    <form action="registro.php" method="POST">
        <label for="user">User</label>
        <input type="text" placeholder="User" name="user">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
        <button type="submit">Registrarse</button>
    </form>

    <?php if (isset($_SESSION['userRegister'])) : ?>
        <p>Datos registrados, ya puedes iniciar sesión</p>
        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'];  ?> </p>
        <a href="index.php">Iniciar sesión</a>
    <?php endif ?>



<!--     INSERT INTO `usersapp` (`id`, `username`, `correo`, `contraseña`) VALUES (NULL, 'Mariana_Rodriguez', 'marianarodriguez@gmail.com', 'MarianaRodriguez112233'), (NULL, 'Juan_David_Garcia', 'juandavidgarcia@gmail.com', 'JuanDavidGarcia112233'), (NULL, 'Isabella_Gomez', 'isabellagomez@gmail.com', 'IsabellaGomez112233'), (NULL, 'Nicolas_Lopez', 'nicolaslopez@gmail.com', 'NicolasLopez112233'), (NULL, 'Sofia_Rodriguez', 'sofiarodriguez@gmail.com', 'SofiaRodriguez112233');
 -->

</body>

</html>
