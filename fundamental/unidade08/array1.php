<?php
    $_salada = array("maça", "abacaxi", "laranja");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
        echo $_salada[0] . "<br>";
        echo $_salada[1] . "<br>";
        echo $_salada[2] . "<br>";
        $_salada[] = "abacate";
        $_salada[] = "morango";

        echo $_salada[3] . "<br>";
        echo $_salada[4] . "<br>";

        echo count($_salada) . "<br>";
        ?>

        <pre>
        <?php
        print_r($_salada);
        ?>
        </pre>
    </body>
</html>