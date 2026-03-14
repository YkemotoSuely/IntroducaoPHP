  <?php
         $aluno = ['nome'=> 'João',
         'idade'=> '18',
         'cidade'=> 'Marília',
         'ativo'=> true
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
            if($aluno['ativo']){                
             echo "nome: " . $aluno['nome'] . " idade: " . $aluno['idade'] . " Cidade: $aluno[cidade]";
        
             }
        ?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>