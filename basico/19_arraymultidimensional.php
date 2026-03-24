  <?php
         $alunos = [['João',
          '18',
          'Marília',
          true],
          ['Maria',
          '19',
          'Vera Cruz',
          true],
          ['Antonio',
          "35",
          'Pompeia',
          false],

         ]

    ?>

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Laço While</title>
        
    </head>
    <body>
        
        <?php
        for($i = 0;$i < count($alunos); $i++) {
            if ($alunos[$i][3])
            {                
                echo "Nome: ".$alunos[$i][0].
                    " Idade: ".$alunos[$i][1]. 
                    " Cidade: ".$alunos[$i][2];
                echo "<hr>";
            }
        }
        ?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>