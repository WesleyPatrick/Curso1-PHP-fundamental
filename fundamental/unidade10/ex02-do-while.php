<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
    $contador = 1;
    do {
        $sorteio = rand(1,60);
        echo $sorteio . " ";
        $contador = $contador + 1;
        
    } while ( $contador < 10);
    ?>
</body>
</html>