<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $valor_u = $_POST['valor_unitario'];
        $cantidad = $_POST['cantidad'];

        $respuesta1 = $valor_u * $cantidad;
        $respuesta2 = $respuesta1 * 0.16;
        $respuesta3 = $respuesta2 + $respuesta1 ;
        
        echo "El precio unitario del producto es: " . $valor_u . "<br>";
        echo "La cantidad de productos solicitado es: " . $cantidad . "<br>";
        echo "El valor total de los productos es: " . $respuesta1 . "<br>";
        echo "El valor total con el 16% de IVA es: " . $respuesta2 . " " . "=" . " " . $respuesta3 ;
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
    <form action="" method="post">
        <h1>Compra un producto </h1>
        <label for="">Ponga el valor de la unidad</label>
        <input type="number" name="valor_unitario"><br>
        <label for="">Ponga la cantidad de productos</label>
        <input type="number" name="cantidad">

        <input type="submit">
    </form>
</body>
</html>