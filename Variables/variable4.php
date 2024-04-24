<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $fecha_actual = 2024;
        $edad = $_POST["Edad"];

        $resultado = $fecha_actual - $edad;

        echo "tu edad segun tu año de nacimiento es: " . " " . $resultado;
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

        <H1>PONGA SU AÑO DE NACIMIENTO</H1>
        <label for="">ponga su Año de nacimiento</label>
        <input type="number" name="Edad">

        <input type="submit">
    </form>
    
</body>
</html>