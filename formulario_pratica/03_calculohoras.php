<?php 

if (isset($_POST['btn_calcular'])) {

    
    $entradaStr = $_POST['hora_entrada'];
    $saidaStr   = $_POST['hora_saida'];
    $almocoStr  = $_POST['hora_almoco'];


    $entrada = DateTime::createFromFormat('H:i', $entradaStr);
    $saida   = DateTime::createFromFormat('H:i', $saidaStr);
    $almoco  = DateTime::createFromFormat('H:i', $almocoStr);

    if (!$entrada || !$saida || !$almoco) {
        die('Horário inválido.');
    }


    $dif = $entrada->diff($saida);

   
    $minutosTrabalhados = ($dif->h * 60) + $dif->i; 


    $minutosAlmoco = ($almoco->format('H') * 60) + $almoco->format('i');

    
    $minutosLiquidos = max(0, $minutosTrabalhados - $minutosAlmoco);

  
    $horas = intdiv($minutosLiquidos, 60); 
    $mins  = $minutosLiquidos % 60;        
    
    echo "<h2>Relatório de Horas</h2>";
    echo "Entrada: " . $entrada->format('H:i') . "<br>";
    echo "Saída: " . $saida->format('H:i') . "<br>";
    echo "<strong>Total Líquido:</strong> {$horas} horas e {$mins} minutos.<br>";
    
    echo "<br><a href='03_calculohoras.html'>Fazer outro cálculo</a>";
} else {
    
    header("Location: 03_calculohoras.html");
}
?>