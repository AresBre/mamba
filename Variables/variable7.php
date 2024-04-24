<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $lado = $_POST["lado"];

        $resultado = $lado * $lado;

        echo "el area del cuadrado es: " . " " . $resultado;
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

        <H1>CALCULAR EL AREA DE UN CUADRADO</H1>
        <label for="">ponga un lado :</label>
        <input type="text" name="lado">

        <input type="submit">
    </form>
    
</body>
</html>