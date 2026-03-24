<?php
    $salariobruto= "3500.00";
    $descontototal = 0.0;

?>    

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Idade</title>
        
    </head>
    <body>
        <?php
    if($salariobruto <= 1621.00)
        {
            $descontototal = $salariobruto * 0.075;
        }elseif($salariobruto <= 2902.84)
            {
                $descontototal = ($salariobruto - 1621.00)*0.09 + 121.75;
            }elseif ($salariobruto <= 4354.27){
                $descontototal = ($salariobruto - 2902.84)*0.12 + 121.75 + 115.84;
            }elseif ($salariobruto <= 8475.55){
                $descontototal = ($salariobruto - 4354.27)*0.14 + 121.75 + 115.84 + 174.17;
            }else {
                ($descontototal = 988.08);
            };
    $salarioliquido = $salariobruto - $descontototal;

    echo "Salário Bruto: " . number_format($salariobruto, 2, '.', '') . 
         " Desconto INSS: " . number_format($descontototal, 2, '.', '') . 
         " Salário Líquido: " . number_format($salarioliquido, 2, '.', '');
        ?>
    </body>
    
</html>