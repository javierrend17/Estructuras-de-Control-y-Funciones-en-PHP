<?php
    echo "<h2>Verificador de primos</h2>";
    if (isset($_POST['numero'])) {
        
        $numero = $_POST['numero'];
        function primo($numero) {

            if ($numero <= 1) {
                return false;
            }

            if ($numero <= 3) {
                return true;
            }

            if ($numero % 2 == 0 || $numero % 3 == 0) {
                return false;
            }

            $limite = (int)sqrt($numero);
            for ($i = 5; $i <= $limite; $i += 6) {
                if ($numero % $i == 0 || $numero % ($i + 2) == 0) {
                    return false;
                }
            }
    
            return true;
        }
        if (primo($numero)) {
            echo $numero." es primo<br><br>";
        } else {
            echo $numero." no es primo<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="numero" placeholder="Ingrese un número">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>
