<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["A"];
    $e = $_POST["E"];
    $i = $_POST["I"];
    $o = $_POST["O"];
    $u = $_POST["U"];

    $resultado = $a + $e + $i + $o + $u;
    $resultado2 = $resultado / 5;

    echo "El resultado de la multiplicacion: " . $resultado2;
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
        <H1>CALCULAR NOTAS</H1>
        
        <label for="">ingrese la primera nota :</label>
        <input type="text" name="A" ><br>
        <label for="">ingrese la segunda nota :</label>
        <input type="text" name="E"><br>
        <label for="">ingrese la tercera nota :</label>
        <input type="text" name="I" ><br>
        <label for="">ingrese la cuarta nota :</label>
        <input type="text" name="O"><br>
        <label for="">ingrese la quinta nota :</label>
        <input type="text" name="U" >

        <input type="submit">
    </form>
    
</body>
</html>