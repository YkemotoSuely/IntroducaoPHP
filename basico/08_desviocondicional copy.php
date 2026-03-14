  <?php
        $mes= 2;

    ?>

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Desvio Condicional</title>
        
    </head>
    <body>
      
      <?php
        

        switch($mes)
        {
            case 1:
                echo "Janeiro";
                break;
            case 2:
                echo "Fevereiro";
                break;
            case 3:
                echo "Março";
                break;
            default:
            echo "Mês inválido!";
        }

        ?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>