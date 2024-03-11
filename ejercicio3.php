<?php
    echo "<h2>Verificador de palindromos</h2>";
    if (isset($_POST['palabra'])) {
        
        $palabra = $_POST['palabra'];
        
        function palindromo($p) {
            $p = strtolower(preg_replace('/[^a-z0-9]/', '', $p));
            $longitud = strlen($p);
            for ($i = 0; $i < $longitud / 2; $i++) {
                if ($p[$i] !== $p[$longitud - $i - 1]) {
                    return false;
                }
            }
            return true;
            
        }

        if (palindromo($palabra)) {
            echo "\"".$palabra."\" es un palindromo<br><br>";
        } else {
            echo "\"".$palabra."\" no es un palindromo<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="palabra" placeholder="Ingrese su palabra">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>
