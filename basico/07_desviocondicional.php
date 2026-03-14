  <?php
        $dia = 2;

    ?>

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Desvio Condicional</title>
        
    </head>
    <body>
      
      <?php
        

        switch($dia)
        {
            case 1:
                echo "Domingo";
                break;
            case 2:
                echo "Segunda";
                break;
            case 3:
                echo "Domingo";
                break;
            default:
            echo "Dia inválido!";
        }

        ?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>