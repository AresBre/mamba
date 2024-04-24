<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];

            if ($numero >= 0) {
                $raiz_cuadrada = $numero ** 0.5;
                echo "La raiz cuadrada de $numero es aproximadamente: $raiz_cuadrada";
            } 
            else {
                echo "Por favor, ingrese un numero positivo";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Raiz Cuadrada</title>
</head>
<body>
    <h2>Calculadora de Raiz Cuadrada</h2>
    <form action="" method="post">
        <label for="numero">Ingrese un numero:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit">
    </form>
</body>
</html>