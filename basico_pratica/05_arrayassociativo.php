<?php
         $endereco = ['Cep'=> "17.519-010",
                    'Rua' => "Rua Marrey Júnior",
                    'Bairro' => "Fragata",
                    'Cidade' => "Marília",
                    'Uf' => "SP"
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

        foreach($endereco as $chave => $valor){
            echo $chave . ": ". $valor . "<br>";
        }
        
            
        // echo "CEP: " . $endereco['cep']
        // . " - Rua: " . $endereco['rua']
        // . " - Bairro: " . $endereco['bairro']
        // . " - Cidade: " . $endereco['cidade']
        // . " - UF: " . $endereco['uf'];

        ?>
    </body>
    
</html>