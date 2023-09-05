<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php

            $_nome = isset($_POST["nome"]) ?  $_nome = $_POST["nome"] : "Sem Definição";
            $_email = isset($_POST["email"]) ? $_email = $_POST["email"] : "Sem definição";

            //APRESENTA RESPOSTAS DO FORMULARIO
            echo "Nome: " . $_nome . "<br>";
            echo "Email: " . $_email . "<br>";

        ?>

    </body>
</html>