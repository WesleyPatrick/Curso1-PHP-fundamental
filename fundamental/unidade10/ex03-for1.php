<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_contador = 1;

        while( $_contador < 5) {
            $sorteio = rand(1,60);
            echo $sorteio . " ";
            $_contador = $_contador + 1;
        }

        echo "<br>";

        for ($_contador = 1; $_contador < 5;  $_contador ++) {
            $sorteio = rand(1,60);
            echo $sorteio . " ";
        }
    ?>
</body>
</html>