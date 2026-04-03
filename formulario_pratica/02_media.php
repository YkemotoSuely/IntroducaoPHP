<?php


if (isset($_POST['btn_media'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $media = ($n1 + $n2 + $n3) / 3;
    $mediaF = number_format($media, 2);

   
    if ($media >= 7) {
        $status = "Aprovado";
    } elseif ($media >= 5) {
        $status = "Recuperação";
    } else {
        $status = "Reprovado";
    }

    
    echo "<h1>Resultado do Cálculo</h1>";
    echo "<p>A média é: <strong>$mediaF</strong></p>";
    echo "<p>Status: <strong>$status</strong></p>";
    
 
    echo "<a href='media.html'>Voltar para o formulário</a>";
}
?>