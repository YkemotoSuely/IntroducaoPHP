<?php 
    

    $entrada = DateTime::createFromFormat('H:i', '07:44');
    $saida   = DateTime::createFromFormat('H:i', '17:38');
    $intervaloAlmoco = DateTime::createFromFormat('H:i', '01:00'); // 1 hora

        if (!$entrada || !$saida || !$intervaloAlmoco) {
        die('Horário inválido. Use HH:MM.');
        }


    // Diferença bruta
        $dif = $entrada->diff($saida);

    // Converter tudo para minutos
        $minutosTrabalhados = ($dif->days * 24 * 60) + ($dif->h * 60) + $dif->i; //onde "i" representa os minutos

    // Descontar almoço
        $minutosAlmoco = ($intervaloAlmoco->format('H') * 60) + $intervaloAlmoco->format('i');
        $minutosLiquidos = max(0, $minutosTrabalhados - $minutosAlmoco);

    // Exibir
         $horas = intdiv($minutosLiquidos, 60);
         $mins  = $minutosLiquidos % 60;

?>   
<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Calculo de horas</title>
        
    </head>
    <body>

        <?php
            echo "Horário de entrada: " . $entrada->format('H:i') . "<br>";
            echo "Horário de saída: "   . $saida->format('H:i')   . "<br>";
            echo "Total trabalhado (líquido): {$horas} horas e {$mins} minutos<br>";

         

        ?>
            
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>    
