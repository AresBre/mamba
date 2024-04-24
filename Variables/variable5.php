<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = $_POST["num"];

        $resultado = $num * 0.2;

        echo "el 20% de tu numero es: " . " " . $resultado ;
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

        <H1>PORCENTAJE</H1>
        <label for="">ponga un numero :</label>
        <input type="text" name="num">

        <input type="submit">
    </form>
    
</body>
</html>