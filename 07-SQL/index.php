<?php

//documentación en W3schools

//1. SELECT
//SELECT id, campoNombre FROM nombreTabla;
//selecciona los DATOS del campo "id" y "campoNombre" que están dentro de la tabla "costumers"

//2. SELECT DISTINCT
//SELECT DISTICT campoNombre FROM nombreTabla;
//selecciona de una mismo campo "campoNombre", los valores diferentes (evitando que se repitan los similares)

//3. WHERE
//SELECT * FROM nombreTabla WHERE campoNombre = pepito;
//filtra (saca) los datos de la columna "campoNombre" que sean iguales a "pepito" (es como una condicional)

//4. ORDERED BY ASC||DESC
//SELECT *  FROM nombreTabla ORDERED BY total ASC; 
//organiza la tabla segun el valor que tengan los datos de "total" de manera ascendente

//5. AND
//SELECT * FROM nombreTabla WHERE campoNombre = "pepito" AND campoEdad = "18";
//utilizado con WHERE, añade otro filtro y SOLO saca los resultados que tengan ambos valores

//6. OR
//SELECT * FROM nombreTabla WHERE campoNombre = "pepito" OR campoNombre = "jaimito";
//utilizado con WHERE, añade otro filtro haciendo que TAMBIEN salga los que tienen el otro valor 

//7. NOT
//SELECT * FROM nombreTabla NOT campoEdad = 18
// hace una excepcion con el campo y/o valor y/o operacion logica que se enlace 

//8. INSERT INTO
//INSERT INTO nombreTabla (campoNombre, total) VALUES("manuelita","22")
//crea una nueva fila (registro) en los campos especificados (campo...) segun el orden en que están escritos

//9. IS NULL || IS NOT NULL
//SELECT * FROM nombreTabla WHERE 'campoNombre' IS NULL
//junto con WHERE, selecciona del "campoNombre" todos los valores que no tengan absolutamente nada

//10. UPDATE
//UPDATE nombreTabla SET campoNombre = 'Pepito', otro = 'animal' WHERE campoNombre = 'Pepote'
//despues de ser especificamente filtrado por WHERE, cambia seleccionando 1 a 1 el valor según el cambio

//11. DELETE
//DELTE FROM nombreTabla WHERE campoNombre = 'Pepito'
//borra de el nombre de la tabla una fila o registro especificado por WHERE
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>