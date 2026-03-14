  <?php
         $nomes = ["Ana","Carlos","Maria"]

    ?>

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Laço While</title>
        
    </head>
    <body>
      
      <?php
        
    //    foreach($nomes as $nome)
    //     {
    //         echo "$nome<br>";
    //     }

        for($i = 0; $i < count($nomes); $i++)
            {
                echo "$nomes[$i]<br>";
            }
        ?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>