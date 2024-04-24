<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $cateto_a = $_POST["cateto_a"];
        $cateto_b = $_POST["cateto_b"];

        $hipotenusa = $cateto_a ** 2 + $cateto_b ** 2;
        $hipotenusa2 = $hipotenusa ** 0.5;

        echo "La hipotenusa es aproximadamente: " . " " . $hipotenusa . "<br>";
        echo "Ahora sacando la raiz cuadrada es: " . " " . $hipotenusa2;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Hipotenusa</title>
</head>
<body>
    <h2>Calculadora de Hipotenusa</h2>
    <form action="" method="post">
        <label for="cateto_a">Ingrese la longitud del cateto A:</label>
        <input type="number" name="cateto_a" id="cateto_a" required><br>
        <label for="cateto_b">Ingrese la longitud del cateto B:</label>
        <input type="number" name="cateto_b" id="cateto_b" required><br>
        <input type="submit" value="Calcular Hipotenusa">
    </form>
</body>
</html>