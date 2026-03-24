<?php
    $nome = "Carlos";
    $dataNascimento = "22-04-2009";
    $curso = "Informática básica";
    
    
    // 2) Criar datas
    $nascimento = new DateTime($dataNascimento); // data de nascimento
    $hoje = new DateTime(); // data de hoje

    
    // 3) Calcular a idade
    // diff = diferença entre datas
    $idade = $hoje->diff($nascimento);

?>    

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Idade</title>
        
    </head>
    <body>
        <?php

           
        echo "Nome: " . $nome . "<br>";
        echo "Curso: " . $curso . "<br>";
        echo "Idade: {$idade->y} anos, {$idade->m} meses e {$idade->d} dias";//mostra a idade completa em dias, meses e anos.

        ?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>