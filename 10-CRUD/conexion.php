<?php session_start();

try {
    $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
    echo "Conexion OK" . "<br>";
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage() . "<br>";
}


?>