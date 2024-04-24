<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = $_POST["num"];

        $resultado = $num * 0.3;
        $resultado2 = $num * 0.6;
        $resultado3 = $num * 0.9;
 
        echo "el 30% de tu numero es: " . " " . $resultado . "<br>";
        echo "el 60% de tu numero es: " . " " . $resultado2 . "<br>"; 
        echo "el 90% de tu numero es: " . " " . $resultado3 . "<br>";
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

        <H1>PORCENTAJE DEL 30% , 60% Y 90%</H1>
        <label for="">ponga un numero :</label>
        <input type="text" name="num">

        <input type="submit">
    </form>
    
</body>
</html>