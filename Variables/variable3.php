<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $velocidad = $_POST['velocidad'];
        $tiempo = $_POST['tiempo'];

        $distancia = $velocidad * $tiempo;
                
        echo "La distancia recorrida en movimiento rectilineo es de $distancia kilometros";
        
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Distancia en Movimiento Rectilineo</title>
</head>
<body>
    <h2>Calcular Distancia en Movimiento Rectilineo</h2>
    <form action="" method="post">
        <label for="velocidad">Ingrese la velocidad en Km/h:</label>
        <input type="number" name="velocidad" id="velocidad" required><br>
        <label for="tiempo">Ingrese el tiempo en horas:</label>
        <input type="number" name="tiempo" id="tiempo" required><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
