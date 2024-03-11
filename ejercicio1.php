<?php
    echo "<h2>Serie de Fibonacci</h2>";

    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    function generarFibonacci($n,$array){
        echo "<ul>";
        echo $array[0]."<br>";
        echo $array[1]."<br>";
        for ($i = 2; $i < $n; $i++){
            $array[$i] = $array[$i - 1] + $array[$i - 2];
            echo $array[$i]."<br>";
        }
        echo "</ul>";
    }

    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        echo generarFibonacci($numero, $fibonacci);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="numero" placeholder="Ingrese un número">
        <input type="submit" value="Generar">
    </form>
</body>
</html>