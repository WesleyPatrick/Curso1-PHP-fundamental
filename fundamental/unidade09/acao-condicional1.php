<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 

            $a = 5;
            $b = 5;

            if ($a > $b) {
                echo "O valor de a é maior";
            } else if ($a < $b) {
                echo "O valor de b é maior";  
            } else {
                echo "O valor de a é igual a b";
            };
        ?>
    </body>
</html>