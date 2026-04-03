<?php

if (isset($_POST['btn_calcular'])) {
    
   
    $salariobruto = (float)$_POST['salario_bruto'];
    $descontototal = 0.0;
    $sobra = $salariobruto;

      $tabela = [
        [0.00, 1621.00, 1621.00, 7.50],
        [1621.01, 2902.84, 1281.84, 9.00],
        [2902.85, 4354.27, 1451.43, 12.00],
        [4354.28, 8475.55, 4121.28, 14.00]
    ];

   
    for ($faixa = 0; $faixa < count($tabela); $faixa++) {
        
        if ($sobra > 0.0) {
            
            if ($salariobruto > $tabela[$faixa][1]) {
                
                $descontototal += ($tabela[$faixa][2] * $tabela[$faixa][3]) / 100.0;
                
                $sobra -= $tabela[$faixa][2];
            } else {
                
                $descontototal += ($sobra * $tabela[$faixa][3]) / 100.0;
                $sobra = 0; 
            }
        }
    }

    $salarioliquido = $salariobruto - $descontototal;

    
    echo "<h1>Folha de Pagamento</h1>";
    echo "<hr>";
    echo "Salário Bruto: R$ " . number_format($salariobruto, 2, ',', '.') . "<br>";
    echo "Desconto INSS: R$ " . number_format($descontototal, 2, ',', '.') . "<br>";
    echo "<strong>Salário Líquido: R$ " . number_format($salarioliquido, 2, ',', '.') . "</strong>";
    
    echo "<br><br><a href='06_desafio.html'>Fazer novo cálculo</a>";
} else {

    header("Location: 06_desafio.html");
}
?>