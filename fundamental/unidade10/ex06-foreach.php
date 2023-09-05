<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_agenda = array(   "nome" => "Wesley",
                            "telefone" => "1234-1234",
                            "salario" => 1000.50,
                            "fumante" => true);

        foreach( $_agenda as $contatos => $valor) {
            echo $contatos . ": " . $valor . "<br>" ;
        }
    ?>
</body>
</html>