<!DOCTYPE html>
</html lang = 'pt-br'>

    <head>
        <meta charset="UTF-08">
        <title>Curso de PHP</title>  
    </head>
    <body>
        <p>
            Olá, hoje é dia <?php 
            echo date('d/m/y');

            /*Aspas Simples, utilizando apenas textos simple*/
            $teste = 1;

            echo '<p>A caixa d\'agua está vazia. \\$teste';
            echo '<p>A caixa d\'agua está vazia.\\'.$teste; //concatenação

            /*Aspas Duplas, são processadas.Por isso permite masi recursos*/
            $litros = '1000L';
            echo "<br>A caixa d'água é de $litros";
        ?>
        
        </p>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>