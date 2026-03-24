<?php
         $endereco = ['cep'=> "17.519-010",
                    'rua' => "Rua Marrey Júnior",
                    'bairro' => "Fragata",
                    'cidade' => "Marília",
                    'uf' => "SP"
         ]

?>

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Endereço</title>
        
    </head>
    <body>
        <?php

            
        echo "CEP: " . $endereco['cep']
        . " - Rua: " . $endereco['rua']
        . " - Bairro: " . $endereco['bairro']
        . " - Cidade: " . $endereco['cidade']
        . " - UF: " . $endereco['uf'];

        
        ?>
    </body>
    
</html>