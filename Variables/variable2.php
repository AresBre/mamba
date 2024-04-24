<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $M = $_POST["A"];

    
        $resultado = $M ** 2;
    
        echo "El resultado del cuadrado del numero es: " . $resultado;

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
        <H1>POTENSIACION</H1>
        <label for="">ponga un numero :</label>
        <input type="text" name="A">

        <input type="submit">
    </form>
</body>
</html>