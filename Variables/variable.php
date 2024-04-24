<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c = $_POST["A"];
    $v = $_POST["E"];
    $b = $_POST["I"];

    $resultado = $c * $v * $b;

    echo "El resultado de la multiplicación: " . $resultado;
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
        <H1>PONGA NUMEROS</H1>
        
        <label for="">ingrese un primer numero :</label>
        <input type="text" name="A"><br>
        <label for="">ingrese un segundo numero :</label>
        <input type="text" name="E"><br>
        <label for="">ingrese un tercer numero :</label>
        <input type="text" name="I">

        <input type="submit">
    </form>
    
</body>
</html>