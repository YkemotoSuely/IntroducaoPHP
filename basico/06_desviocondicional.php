  <?php
        $nota = 7;

    ?>
?>
<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Desvio Condicional</title>
        
    </head>
    <body>
      
      <?php
        

        if($nota >= 7)
        {
            echo "Aprovado!!";
        }
         elseif($nota >= 4)
        {
            echo "Recuperação";
        }
        else
        {
            echo "Reprovado";
        }

?>

        ?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>