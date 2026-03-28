<?php
$salariobruto = "9000.00";
$descontototal = 0.0;
$sobra = $salariobruto;

//array multidimensional
$tabela = [
    [0.00, 1621.00, 1621.00, 7.50],
    [1621.01, 2902.84, 1281.84, 9.00], //1281.84 = 2902.84 - 1621.01 (considerando o intervalo e não uma subtração)
    [2902.85, 4354.27, 1451.43, 12.00],    //1451.43 = 4354.27 -2902.85 considerando o intervalo e não uma subtração)
    [4354.28, 8475.55, 4121.28, 14.00], //4121.28 = 8475.55 - 4354.28 considerando o intervalo e não uma subtração)
]
?>

<!DOCTYPE html>

</html lang='pt-br'>

<head>
    <meta charset="UTF-08">

    <title>Calculo INSS</title>

</head>

<body>
    <?php
    // if($salariobruto <= 1621.00)
    //     {
    //         $descontototal = $salariobruto * 0.075;
    //     }elseif($salariobruto <= 2902.84)
    //         {
    //             $descontototal = ($salariobruto - 1621.00)*0.09 + 121.75;
    //         }elseif ($salariobruto <= 4354.27){
    //             $descontototal = ($salariobruto - 2902.84)*0.12 + 121.75 + 115.84;
    //         }elseif ($salariobruto <= 8475.55){
    //             $descontototal = ($salariobruto - 4354.27)*0.14 + 121.75 + 115.84 + 174.17;
    //         }else {
    //             ($descontototal = 988.08);
    //         };


    for ($faixa = 0; $faixa < count($tabela); $faixa++) {

        if ($sobra > 0.0) {
            if ($salariobruto > $tabela[$faixa][1]) {
                $descontototal += $tabela[$faixa][2] * $tabela[$faixa][3] / 100.0;
                $sobra -= $tabela[$faixa][2];
            } else {
                $descontototal += $sobra * $tabela[$faixa][3] / 100.0;
                $sobra  -= $sobra;
            }
        }
    }
    $salarioliquido = $salariobruto - $descontototal;

    echo "Salário Bruto: " . number_format($salariobruto, 2, '.', '') .
        " Desconto INSS: " . number_format($descontototal, 2, '.', '') .
        " Salário Líquido: " . number_format($salarioliquido, 2, '.', '');


    ?>
</body>

</html>