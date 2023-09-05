<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            //$dia = "sabado";
            //if ($dia == "sabado" || $dia == "domingo") {
            //    echo "Pode descansar pois hoje é: " . $dia;
            //} else {
            //    echo "Dia de trabalho";
            //}

            $idade = 19;
            $sexo = "feminino";

            if ($idade > 18 && $sexo == "feminino") {
                echo "poderá ir à festa!";
            } else {
                echo "NÃO poderá ir a festa";
            }
        ?>
    </body>
</html>