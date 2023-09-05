<?php 
    $salario = 800;
    $meses = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo $salario * $meses . "<br>"; 
            echo $salario / 15 . "<br>"; 
            
            echo "<br>";
            // Exponencial
            echo "Exponencial: " . pow(6,2) . "<br>";
            echo "Exponencial: " . pow(6,3) . "<br>";
            
            echo "<br>";
            // Raiz Quadrada
            echo "Raiz Quadrada: " . sqrt(36) . "<br>";
            echo "Raiz Quadrada: " . sqrt(18) . "<br>";
            
            echo "<br>";
            // Randômico Generica
            echo "Randômico Generica: " . rand() . "<br>";
            // Randômico entre um intervalo
            echo "Randômico Generica em intervalo: " . rand(5, 10) . "<br>";

            echo "<br>";
            // Valor absoluto
            echo "Número absoluto: " . abs(rand(-100, -10));
            
        ?>
    </body>
</html>