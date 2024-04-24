<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $sal_diario = $_POST['salario_diario'];
        $dia_trab = $_POST['dias_trabajados'];

        $respuesta1 = $sal_diario * $dia_trab;
        $respuesta2 = $respuesta1 * 0.10;
        $respuesta3 = $respuesta1 - $respuesta2;
        $respuesta4 = $respuesta3 * 0.15;
        $respuesta5 = $respuesta4 - $respuesta3;
        
        echo "El precio por salario diario es: " . $sal_diario . "<br>";
        echo "La cantidad de dias trabajados es: " . $dia_trab . "<br>";
        echo "El valor total de salario es: " . $respuesta1 . "<br>";
        echo "El valor total menos 10% por concepto de pension es: " . $respuesta2 . " " . "=" . " " . $respuesta3 . "<br>";
        echo "El valor total menos 15% por concepto de salud es: " . $respuesta4 . " " . "=" . " " . $respuesta5 ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario de un empleado</title>
</head>
<body>
    <form action="" method="post">
        <h1>Salario de un empleado</h1>
        <label for="">Ponga el valor del salario diario :</label>
        <input type="number" name="salario_diario"> <br>
        <label for="">Ponga la cantidad de dias trabajados :</label>
        <input type="number" name="dias_trabajados">

        <input type="submit">
    </form>
</body>
</html>