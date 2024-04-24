<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $segundos = $_POST['segundos'];

        $horas = floor( $segundos / 3600);
        $segundos_restantes = $segundos % 3600;
        $minutos =floor($segundos_restantes / 60);
                
        echo "$segundos segundos equivalen a $horas horas y $minutos minutos";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformar Segundos a Horas y Minutos</title>
</head>
<body>
    <h2>Transformar Segundos a Horas y Minutos</h2>
    <form action="" method="post">
        <label for="segundos">Ingrese el tiempo en segundos:</label>
        <input type="number" name="segundos" id="segundos" required><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>