
<?php
    $num1 = 20;
    $num2 = 5;
    $soma = $num1 + $num2; 
    $sub = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2; 
    $resto = $num1 % $num2;

?>
<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Operadores Aritméticos</title>
        
    </head>
    <body>
        <?php
            echo "Soma: $soma <br>";
            echo "Subtração: $sub <br>";
            echo "Multiplicação: $mult <br>";
            echo "Divisão: $div <br>";
            echo "Módulo (resto da divisão): $resto <br>";
        ?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>