  <?php
         $produto = ['nome'=> 'Tenis',
         'preço'=> '180.00',
         'estoque'=> 55
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
      $preçoFormatado = number_format($produto['preço'],2,',', '.');
               
        echo "Nome: " . $produto['nome'] . " preço: $preçoFormatado . Quantidade: $produto[estoque]";
        
?>
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>