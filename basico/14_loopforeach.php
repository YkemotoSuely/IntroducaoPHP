  <?php
         $cidades = ["Marília","Bauru","Botucatu","Garça","Tupã"]

    ?>

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Laço While</title>
        
    </head>
    <body>
      
      <?php
        
       foreach($cidades as $cidade)
        {
            echo "$cidade<br>";
        }

        // for($i = 0; $i < count($cidades); $i++)
        //     {
        //         echo "$cidades[$i]<br>";
        //     }
        ?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>