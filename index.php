<?php

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
        <label for="">Ingresa un numero</label>
        <input type="number" name="numero" id="">
        <button type="submit">Enviar</button>
    </form>
<?php
$numero;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $numero = $_POST['numero'];
    echo "Tabla del ".$numero."<br>";
    for ($i=1; $i < 11; $i++) { 
        echo $numero."X".$i."=".($numero*$i)."<br>";
    }
}
?>

</body>
</html>