<?php

$apiKey = "da25542ab78978bde76458bde23494a4";
$latitude = "-22.2138900";
$longitude = "-49.9458300";


$url = "https://api.openweathermap.org/data/2.5/weather?lat={$latitude}&lon={$longitude}&appid={$apiKey}";


$resposta = file_get_contents($url);

if ($resposta !== false){
    $dados = json_decode($resposta, true);

    echo "<pre>";
    print_r($dados);
    echo "</pre>";
 
}else {
    echo "Erro ao consultar a API.";
}

?>