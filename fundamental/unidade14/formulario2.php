<?php
    if (isset($_POST["formulario"])) {

        $_nome = isset($_POST["nome"]) ?  $_nome = $_POST["nome"] : "Sem Definição";
            $_email = isset($_POST["email"]) ? $_email = $_POST["email"] : "Sem definição";
    }
?>




<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php 
            if(!isset($_POST["formulario"])) {
        ?>
        <form action="formulario2.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" name="formulario" value="Enviar Cadastro">
        </form>

        <?php 
            } else {
                //APRESENTA RESPOSTAS DO FORMULARIO
                echo "Nome: " . $_nome . "<br>";
                echo "Email: " . $_email . "<br>";
            }
        ?>
    </body>
</html>