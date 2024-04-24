<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $metros = $_POST['metros'];

        $kilometros = $metros / 100;
        $centimetros = $metros * 100;
        $milimetros = $metros * 1000;
                
        echo "$metros metros equivalen a $kilometros kilometros, $centimetros centimetros y $milimetros milimetros";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformar Distancia</title>
</head>
<body>
    <h2>Transformar Distancia</h2>
    <form action="" method="post">
        <label for="metros">Ingrese la distancia en metros:</label>
        <input type="number" name="metros" id="metros" required>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>